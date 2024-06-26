<?php
function MailSend(string $body, string $mailFrom, string $mailTo, string $subject, object $smtp): string
{
    $headers = "From: $mailFrom\r\n";
    $headers .= "To: $mailTo\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    
    if ($smtp->send($mailTo, $subject, $body, $headers)) {
        $result = "Сообщение отправлено";
    } else {
        $result = "Сообщение не было отправлено";
    }

    return $result;
}

function Message(string $name, string $rcptName, string $message): string
{
    return "Уважаемый $rcptName, вам отправлено письмо от $name с сообщением: $message";
}

function Validation(string $field, string $fieldType): mixed
{
    if ($fieldType == 'email') {
        $regEx = '/[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,}/i';
    } elseif ($fieldType == 'text') {
        $regEx = '/[а-яА-я][а-я]*([ ][а-яА-я][а-я]*){0,2}/';
    }

    if (preg_match($regEx, $field)) {
        $message = false;
    } else {
        $message = 'неверно введено';
    }

    return $message;
}

function AutoComplite(mixed $field): string
{
    if ($field) {
        return $field;
    } else {
        return '';
    }
}

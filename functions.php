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

function Validation(string $regEx, string $field): mixed
{
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

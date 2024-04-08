<?php
function MailSend(string $body, string $mailFrom,  string $mailTo,  string $subject): string
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth = true;
        $mail->Host       = 'smtp.mailsnag.com'; 
        $mail->Username   = 'zwV5XDkwhFev';
        $mail->Password   = 'XKnvNXXPcXq0';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 2525;
        $mail->setFrom($mailFrom);

    
        $mail->addAddress($mailTo);
        

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;


        if ($mail->send()) {
            $result = "Сообщение отправлено";
        } else {
            $result = "Сообщение не было отправлено";
        }

    } catch (Exception $e) {
        $result = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
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

function AutoComplite(string $field): string
{
    if ($field) {
        return $field; 
    } else {
        return '';
    }
}

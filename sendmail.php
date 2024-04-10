<?php
declare(strict_types = 1);

require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');
require_once('phpmailer/Exception.php');
include_once('functions.php');
include_once("result.php");

$site = $_SERVER['HTTP_HOST'];

$subject = "С сайта: $site отправлено сообщение";

if ($_POST['submit_btn']) {

    $name = trim($_POST['user_name']);
    $email = trim($_POST['user_email']);
    $rcptName = trim($_POST['rcpt_name']);
    $rcptEmail = trim($_POST['rcpt_email']);
    $text = trim(htmlspecialchars($_POST['message']));

    $regExName = '/[а-яА-я][а-я]*([ ][а-яА-я][а-я]*){0,2}/';
    $regExEmail = '/[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,}/i';

    $ValidName = Validation($regExName, $name);
    $ValidEmail = Validation($regExEmail, $email);
    $ValidRcptName = Validation($regExName, $rcptName);
    $ValidRcptEmail = Validation($regExEmail, $rcptEmail);


    if (!$ValidName
        && !$ValidEmail
        && !$ValidRcptName
        && !$ValidRcptEmail
    ) {
        $body = Message($name, $rcptName, $text);

        $send = MailSend($body, $email, $rcptEmail, $subject);

        exit(EndSend($send));
    }
}

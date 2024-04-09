<?php
declare(strict_types = 1);

require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');
require_once('phpmailer/Exception.php');
include_once('functions.php');

$site = $_SERVER['HTTP_HOST'];

$subject = "С сайта: $site отправлено сообщение";

if ($_POST['submit_btn']) {

    $name = trim($_POST['user_name']);
    $email = trim($_POST['user_email']);
    $rcptName = trim($_POST['rcpt_name']);
    $rcptEmail = trim($_POST['rcpt_email']);
    $text = trim(htmlspecialchars($_POST['message']));

    $regExName = '/[а-яА-я][а-я]*([ ][а-яА-я][а-я]*){0,2}/';
    $regExEmail = '/[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/i';

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
        exit("<div style='margin-left: 20px; margin-top: 20px;'>
                <p>" . MailSend($body, $email, $rcptEmail, $subject) . ";</p>
                <a href='index.php' style = 'margin-bottom: 15px; padding: 10px 20px; display: inline-block;
                background: rgb(200, 200, 200); text-decoration: none;'>OK</a>
            </div>");
    }
}

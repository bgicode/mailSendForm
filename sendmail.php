<?php
declare(strict_types = 1);

include_once('functions.php');
include_once("result.php");
include_once('SendMailSmtpClass.php');

$site = $_SERVER['HTTP_HOST'];

$subject = "С сайта: $site отправлено сообщение";

if ($_POST['submit_btn']) {

    $username = "TtKDlDkv3dE2";
    $password = "PwwLiM8iVzZp";
    // $username = "zwV5XDkwhFev";
    // $password = "XKnvNXXPcXq0";
    $host = "smtp.mailsnag.com";
    $port = "2525";

    $smtp = new SendMailSmtpClass($username, $password, $host, $mailFrom, $port);

    $name = trim($_POST['user_name']);
    $email = trim($_POST['user_email']);
    $rcptName = trim($_POST['rcpt_name']);
    $rcptEmail = trim($_POST['rcpt_email']);
    $text = trim(htmlspecialchars($_POST['message']));

    $ValidName = Validation($name, 'text');
    $ValidEmail = Validation($email, 'email');
    $ValidRcptName = Validation($rcptName, 'text');
    $ValidRcptEmail = Validation($rcptEmail, 'email');

    if (!$ValidName
        && !$ValidEmail
        && !$ValidRcptName
        && !$ValidRcptEmail
    ) {
        $body = Message($name, $rcptName, $text);

        $send = MailSend($body, $email, $rcptEmail, $subject, $smtp);

        exit(EndSend($send));
    }
}

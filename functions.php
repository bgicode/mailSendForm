<?php
function MailSend(string $message, string $mailTo, ): void
{
    $host = 'ssl://smtp.mail.ru';
    $port = 465;
    $username = 'desimo123@mail.ru';
    $password = 'fAqgGbdxjLpHcUWCcsVP';
    $smtpFrom = 'desimo123@mail.ru';

    $mail = new SendMailSmtpClass($username, $password, $host, $smtpFrom, $port);

    $uri = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);
    $url = $_SERVER['HTTP_HOST'] . $uri;

    
    $subject = 'бронирование на ';
    $subject .= $url;
    $headers = "From: desimo123@mail.ru\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $mail->send($mailTo, $subject, $message, $headers);
}
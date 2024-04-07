<?php
include_once('SendMailSmtpClass.php');

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$text = $_POST['message'];

$rcptName = $_POST['rcpt_name'];
$rcptEmail = $_POST['rcpt_email'];


if ($_POST['submit_btn']) {
    if (!preg_match('/[а-я]/i', $name)) {
        echo 'имя неправильное';
    } else {
        echo 'всё норм';
    }
}

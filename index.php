<?php
include_once('sendmail.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body class="bodyFeed">
    <div class="wrap">
        <div class="formWraper">
            <form class="form" name="feedback" method="POST" action="<?php $_SERVER['REQUEST_URI'] ?>">
                <div class="caption"><h1>Обратная связь</h1></div>
                <div class="formTitle">Ваше имя</div>
                <input class="inputField" type="text" name="user_name" value="<?=AutoComplite($name)?>">
                <?php
                if ($ValidName) {
                    echo '<p class="message">' . $ValidName . '</p>';
                }
                ?>
                <div class="formTitle">Ваш email</div>
                <input class="inputField" type="email" name="user_email" value="<?=AutoComplite($email)?>">
                <?php
                if ($ValidEmail) {
                    echo '<p class="message">' . $ValidEmail . '</p>';
                }
                ?>
                <div class="formTitle">Имя получателя</div>
                <input class="inputField" type="text" name="rcpt_name" value="<?=AutoComplite($rcptName)?>">
                <?php
                if ($ValidRcptName) {
                    echo '<p class="message">' . $ValidRcptName . '</p>';
                }
                ?>
                <div  class="formTitle">email получателя</div>
                <input class="inputField" type="email" name="rcpt_email" value="<?=AutoComplite($rcptEmail)?>">
                <?php
                if ($ValidRcptEmail) {
                    echo '<p class="message">' . $ValidRcptEmail . '</p>';
                }
                ?>
                <div  class="formTitle">Сообщение</div>
                <textarea name="message"></textarea>
                <div>
                <input class="submitBtn" type="submit" name="submit_btn" value="Отправить">
                </div>
                <?php
                ?>
            </form>
    </div>
</body>
</html>

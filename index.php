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
<script src="./script.js" type="text/javascript"></script>
</head>
<body class="bodyFeed">
    <div class="wrap">
        <div class="formWraper">
            <form class="form" name="feedback" method="POST" action="<?php $_SERVER['REQUEST_URI'] ?>">
                <div class="caption"><h1>Обратная связь</h1></div>
                <div class="formTitle">
                    Ваше имя
                    <?php
                    if ($ValidName) {
                        echo '<span class="message">' . $ValidName . '</span>';
                    }
                    ?>
                </div>
                <input class="inputField" type="text" name="user_name" value="<?= AutoComplite($name) ?>" required>
                
                <div class="formTitle">
                    Ваш email
                    <?php
                    if ($ValidEmail) {
                        echo '<span class="message">' . $ValidEmail . '</span>';
                    }
                    ?>
                </div>
                <input class="inputField" type="email" name="user_email" value="<?= AutoComplite($email) ?>" required>
                
                <div class="formTitle">
                    Имя получателя
                    <?php
                    if ($ValidRcptName) {
                        echo '<span class="message">' . $ValidRcptName . '</span>';
                    }
                    ?>
                </div>
                
                <input class="inputField" type="text" name="rcpt_name" value="<?= AutoComplite($rcptName) ?>" required>
                
                <div  class="formTitle">
                    email получателя
                    <?php
                    if ($ValidRcptEmail) {
                        echo '<span class="message">' . $ValidRcptEmail . '</span>';
                    }
                    ?>
                </div>
                <input class="inputField" type="email" name="rcpt_email" value="<?= AutoComplite($rcptEmail) ?>" required>
                
                <div  class="formTitle">Сообщение</div>
                <textarea name="message"></textarea>
                <div>
                <input class="submitBtn" type="submit" name="submit_btn" value="Отправить">
                </div>
                
            </form>
        </div>
    </div>
    <?php
    if ($endSend) {
        echo '<div class="endMessageWrap">
            <div class="endformWraper">
                <div class="endMessage"> 
                    <p>' . $send . '</p>
                </div>
                <a href="index.php" class="submitBtn" style = "text-decoration: none;  display: inline-block;">OK</a>
            </div>
        </div>';
    }
    ?>
</body>
</html>

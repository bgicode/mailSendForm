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
        <div class="form_wraper">
            <form class="form" name="feedback" method="POST" action="<?php $_SERVER['REQUEST_URI'] ?>">
                <div class="caption"><h1>Обратная связь</h1></div>			
                <div class="form_title">Ваше имя</div>
                <input type="text" name="user_name" >
                <div  class="form_title">Ваш email</div>
                <input type="email" name="user_email" >

                <div class="form_title">Имя получателя</div>
                <input type="text" name="rcpt_name" >
                <div  class="form_title">email получателя</div>
                <input type="email" name="pcpt_email" >

                <div  class="form_title">Сообщение</div>
                <textarea name="message"></textarea>
                <input class="submit_btn" type="submit" name="submit_btn" value="Отправить">
			</form>
		</div>
	</div>
</body>
</html>

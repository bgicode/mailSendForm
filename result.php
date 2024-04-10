<?php
function EndSend($calback)
{ 
    return <<<END
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
                <div class="endMessage"> 
                    <p>$calback</p>
                </div>
                <a href="index.php" class="submitBtn" style = "text-decoration: none;  display: inline-block;">OK</a>
            </div>
        </div>
    </body>
    </html>
    END;
}

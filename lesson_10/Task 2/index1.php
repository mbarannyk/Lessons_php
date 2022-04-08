<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form_1</title>
</head>
<body>
<?php
session_start();
?>
    <form action="/index2.php" method="post">
_
    <p>Вкажіть, будь ласка, ваше ім'я: 
        <input type="text" name="name" required/>
        </p>   
       
        <input type="submit" value="Отправить" name="отправить">
    </form>
</body>
</html>
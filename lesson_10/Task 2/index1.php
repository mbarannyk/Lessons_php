<?php
session_start();
?>

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Form_1</title>
</head>
<body>


<form action="/index2.php" method="GET">

    <p>Вкажіть, будь ласка, ваше ім'я: 
        <input type="text" name="name" required/>
        </p>   
       
        <input type="submit" value="Отправить" name="submit">
    </form>
</body>
</html>
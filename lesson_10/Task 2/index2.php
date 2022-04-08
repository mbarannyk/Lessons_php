<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form_2</title>
</head>
<body>
    <form action="/index3.php" method="GET">
   
    <?php
   
    if (isset ($_REQUEST['submit'])) {
    $_SESSION['name'] = $_REQUEST['name'];
    }
    ?>

    <p>Вкажіть, будь ласка, ваше прізвище: 
        <input type="text" name="surname" required/>
        </p>   
       
       
        <input type="submit" value="Отправить" name="submit">
    </form>
</body>
</html>
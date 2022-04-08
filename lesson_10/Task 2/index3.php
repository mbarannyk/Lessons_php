<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form_3</title>
</head>
<body>
    <form action="/form.php" method="GET">

    <?php
    if (isset ($_REQUEST['submit'])) {
    $_SESSION['surname'] = $_REQUEST['surname'];
    }
    ?>

    <p>Вкажіть, будь ласка, ваш вік: 
        <input type="number" name="age" required/>
        </p>   
       
        <input type="submit" value="Отправить" name="submit">
    </form>
</body>
</html>
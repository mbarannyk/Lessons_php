<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form_2</title>
</head>
<body>
    <form action="/form.php" method="post">

    <p>Ваш номер телефону: 
    <?php
   if (isset($_COOKIE['number'])) {
    $number = $_COOKIE['number'];
    echo $number;
    }  else {
    setcookie("number", "{$_POST['phone']}");
    echo $_POST['phone'];
}
?>
    </p>   
    <div>
            <p> Прізвище: 
                <input type="text" name="lastname" required/>
            </p>
            <p> Ім'я:
                <input type="text" name="firstname" required/>
            </p>
            <p> По-батькові:
                <input type="text" name="pattronymic"/>
            </p>
        </div> 


        <input type="submit" value="Отправить" name="отправить">
    </form>
</body>
</html>
  
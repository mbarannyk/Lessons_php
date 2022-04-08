<?php
echo '<pre>';
$_SERVER['REQUEST_METHOD'] == 'POST';

$name = $_SESSION["name"];
$surname = $_SESSION["surname"];
$age = $_SESSION["age"];



if (isset($_SESSION["name"])) {
    echo 'Ім\'я:'.$name .PHP_EOL;
}

if (isset($_SESSION["name"])) {
    echo 'Прізвище:'.$surname .PHP_EOL;
}

if (isset($_SESSION["name"])) {
    echo 'Вік:'.$age .PHP_EOL;
}
print_r($_SESSION);

session_write_close();

/*
    <p>Вкажіть, будь ласка, ваше ім'я: 
<
    
        <input type="text" name="name" required/>
        </p> 

    <p>Вкажіть, будь ласка, ваше прізвище: 
        <input type="text" name="surname" required/>

    <p>Вкажіть, будь ласка, ваш вік: 
        <input type="number" name="age" required/>
        </p>   
       
        <input type="submit" value="Отправить" name="отправить">
    </form>
</body>
</html>*/

echo '</pre>';
?>
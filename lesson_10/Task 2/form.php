<?php

session_start();

echo '<pre>';

if (isset ($_REQUEST['submit'])) {
    $_SESSION['age'] = $_REQUEST['age'];
}


if (isset($_SESSION["name"])) {
    echo 'Ваше ім\'я:  '.$_SESSION["name"] .PHP_EOL;
}

if (isset($_SESSION["surname"])) {
    echo 'Ваше прізвище:  '.$_SESSION["surname"] .PHP_EOL;
}

if (isset($_SESSION["age"])) {
    echo 'Ваш вік:  '.$_SESSION["age"] .PHP_EOL;
}


session_write_close();

echo '</pre>';
?>

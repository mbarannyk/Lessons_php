<html>

<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php" method="get">

    <h3> Результат обчислень:</h3>

<?php

$result = require __DIR__ . '/calculator.php';
//print_r ($result);
if (isset($result) == TRUE) {
 echo $_GET['a'] . ' ' . $_GET['operation'] . ' ' . $_GET['b'] . ' = '. $result;
} else {
    echo 'Операція не виконана';
}
 ?>
 


</form>
</body>
</html>
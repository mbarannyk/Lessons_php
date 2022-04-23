<html>

<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php" method="get">
 

<h3>Калькулятор</h3>
    <input type="number" name="a" step="any" required/>

    <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="b" step="any" required/>

    <input type="submit" value="Розрахувати">

</form>
</body>
</html>
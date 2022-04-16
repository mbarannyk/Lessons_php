<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <form action="/index.php" method="post">

    
    <h1>Список товарів</h1>
<?php
$conn = mysqli_connect("localhost", "root", "root", "Список_товарів");
$query = "select * from Products";
$result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $name = $row['Назва_товару'];
        $season = $row['Сезон'];
        $price = $row['Ціна'];
        echo '<pre>';
        print($id . ". Назва_товару: " . $name . "   Сезон:  " . $season . "   Ціна:  " . $price . " грн " . " \n");
        echo '</pre>';
    }

mysqli_free_result($result);
mysqli_close($conn);
?>
</p>   
<h2>Додати товар</h2>
    <div>
            <p> Назва товару: 
                <input type="text" name="name" required/>
            </p>
            <p> Сезон:
                <input type="text" name="season" required/>
            </p>
            <p> Ціна:
                <input type="number" name="price" step="any" required/>
            </p>
        </div> 



<input type="submit" value="Отправить" name="отправить">

</form>
</body>
</html>

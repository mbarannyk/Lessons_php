<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('#ProductForm').submit(function (event) {
                event.preventDefault();
                let product = {
                    'id': $("#ProductForm input[name='id']").val(),
                    'name': $("#ProductForm input[name='name']").val(),
                    'price': $("#ProductForm input[name='price']").val(),
                    'season': $("#ProductForm input[name='season']").val(),
                };

                // console.dir(JSON.stringify(product));
                $.ajax({
                    url: '/addProduct.php',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(product)
                })
                    .done(function() {
                    alert( "second success" );
                })
                    .fail(function() {
                        alert( "error" );
                    })
                    .always(function() {
                        alert( "finished" );
                    });

            });
        });
    </script>
</head>
<body>
<div>
    <form id="ProductForm">
        <label>№</label> <input type="number" name="id"></br>
        <label>Назва продукту</label> <input type="text" name="name"></br>
        <label>Ціна продукту</label> <input type="number" name="price" step="any"></br>
        <label>Сезон</label> <input type="text" name="season"></br>
        <input type="submit" value="Додати продукт" id="subAddProduct">
        <input type="submit" value="Оновити продукт" id="UpdProduct">
        <input type="submit" value="Видалити продукт" id="DelProduct">
    </form>
</div>
</body>
</html>


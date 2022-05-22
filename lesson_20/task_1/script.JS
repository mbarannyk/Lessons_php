  $(function () {
    $('#addProductForm').submit(function (e) {
        e.preventDefault();
        let data = $(this).serialize();
        $.ajax({
            method: "POST",
            url: "addProductSQL.php",
            data: data,
            success: function () {
                fetch();
            }
        })
    });
  });

  function fetch() {
    $.ajax({
        method: "POST",
        url: "DisplayProducts.php",
        success: function (data) {
            $("#fetch").html(data);
        }

    })
}
fetch();

  
  $(document).on("click", "#updateProduct", function (e) {
        e.preventDefault();
        let new_id = $("#new_id").val();
        let new_season = $("#new_season").val();
        let new_name = $("#new_name").val();
        let new_price = $("#new_price").val();

        $.ajax({
            method: "POST",
            url: "updateProduct.php",
            data: {
                new_id: new_id, new_season: new_season,
                new_name: new_name, new_price: new_price
            },
            success: function () {
                fetch();
                hide.addEventListener("click", () => {
                    content.style.display = "none"
                });
            }
        });
    })

    $(document).on("click", "#deleteProduct", function (e) {
        e.preventDefault();
        let delProd = $(this).attr("value");
        $.ajax({
            method: "POST",
            url: "deleteProduct.php",
            data: {delProd: delProd},
            success: function () {
                fetch();
            }
        });
    });

    

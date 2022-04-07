<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV-form</title>
</head>
<body>
    <form action="/date_cv.php" method="post" enctype="multipart/form-data">
    <h1>Резюме</h1>
    <p> (* - поле, обязательное для заполнения)</p>
    <p>Дата заполнения*: 
        <?php 
        echo $_POST['date'];
        ?>
        </p>   
        <!--Личные данные--> 
        <h3>Личные данные</h3>
        <div>
            <p> Фамилия*: 
                <?php 
                echo $_POST['lastname'];
                ?>
             </p>
            <p> Имя*:
                <?php 
                echo $_POST['firstname'];
                ?>
            </p>
            <p> Отчество:
                 <?php 
                echo $_POST['pattronymic'];
                ?> 
            </p>
        </div> 
         <!--Фото-->
         <div>
            <h3> Фотография <h3>
            <?php
            if (isset($_FILES['photo']['name'])&&$_FILES['photo']['size']>0) {
                $photo_name = $_FILES['photo']['name'];
                $photo_tmp = $_FILES['photo']['tmp_name'];
                   if (move_uploaded_file($photo_tmp, "html/photo/{$photo_name}")) {
                    $path="http://localhost/date_cv.php";
                    $img_path=$path.'html/photo/'.$photo_name;
                    $photo= '<img src="'.$img_path.'" width="100px">';
                    echo $photo;
                }else{
                    echo 'Ошибка загрузки';
                }
                }else{ 
                echo 'Фото не загрузилось';
            }?> 
         </div>   
        <!--Дата рождения, город проживания-->
        <div>
            <p> Дата рождения*: 
                <?php 
                echo $_POST['birthdaydate'];
                ?>
            </p>  
            <p> Город проживания*: 
                <?php 
                echo $_POST['city'];
                ?>    
            </p>
        </div>
        <!--Контактная информация-->
        <h3>Контактная информация</h3>
        <p> Телефон*: 
                <?php 
                echo $_POST['phone'];
                ?>    
        </p>
        <p> E-mail*:
                <?php 
                echo $_POST['email'];
                ?>   
        </p>
        <!--Образование-->
        <p> <h3>Образование*</h3>
                <?php 
                echo $_POST['education'];
                ?> 
        </p>
        <!--Курсы-->
        <p> <h3>Курсы</h3>
                <?php 
                echo $_POST['courses'];
                ?>
        </p>
        <p> <!--Опыт роботы-->
            <h3>Опыт роботы*</h3>
                 <?php 
                echo $_POST['experience'];
                ?>
        </p>
        <!--Достижения-->
        <p> <h3>Достижения</h3>
                <?php 
                echo $_POST['achievments'];
                ?>
         </p>
    <!--Языки-->
    <h3>Знание языков*</h3>
    <p>Русский: 
                <?php 
                echo $_POST['russian'];
                ?>
     </p>
    <p>Украинский: 
                <?php 
                echo $_POST['ukrainian'];
                ?>
    </p>
    <p>Английский: 
                <?php 
                echo $_POST['english'];
                ?>
    </p>
<input type="submit" name="отправить">
    </form>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV-form</title>
</head>
<body>
    <form action="/date_cv.php" method="post">
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
            <h3> Фотография* <h3>
                <?php 
                $result = $_POST['photo'];?>
                <img src="images/gallery/<?php echo $result; ?>.jpeg">
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

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
        <input type="date" name="date" required/>
        </p>   
        <!--Личные данные--> 
        <h3>Личные данные</h3>
        <div>
            <p> Фамилия*: 
                <input type="text" name="lastname" required/>
            </p>
            <p> Имя*:
                <input type="text" name="firstname" required/>
            </p>
            <p> Отчество:
                <input type="text" name="pattronymic"/>
            </p>
        </div> 
         <!--Фото-->
         <div>
            <h3> Фотография* <h3>
          <input type="file" name="photo" multiple accept="image/*,image/jpeg" required/>
        </div>   
        <!--Дата рождения, город проживания-->
        <div>
            <p> Дата рождения*: 
                <input type="date" name="birthdaydate" required/>
                </p>  
            <p> Город проживания*: 
                <input type="text" name="city" required/>
                </p>
        </div>
        <!--Контактная информация-->
        <h3>Контактная информация</h3>
        <p> Телефон*: 
            <input type="text" name="phone" required/>
        </p>
        <p> E-mail*:
            <input type="email" name="email" required/>
        </p>
        <!--Образование-->
        <p> <h3>Образование*</h3>
         <textarea name="education" required></textarea> 
    </p>
        <!--Курсы-->
        <p>  <h3>Курсы</h3>
         <textarea name="courses"></textarea> 
        </p>
        <!--Опыт роботы-->
         <p>   <h3>Опыт роботы*</h3>
             <textarea name="experience" required></textarea> 
        </p>
        <!--Достижения-->
        <h3>Достижения</h3>
        <textarea name="achievments"></textarea> 
   </p>
    <!--Языки-->
    <h3>Знание языков*</h3>
    <p>Русский: <input type="radio" name="russian" value="Базовые знания" required/> Базовые знания <br>
                 <input type="radio" name="russian" value="Читаю профессиональную литературу" required/> Читаю профессиональную литературу<br>
                 <input type="radio" name="russian" value="Могу проходить интервью" required/> Могу проходить интервью<br>
                 <input type="radio" name="russian" value="Свободно владею" required/> Свободно владею<br>
    </p>
    <p>Украинский: <input type="radio" name="ukrainian" value="Базовые знания" required/> Базовые знания <br>
        <input type="radio" name="ukrainian" value="Читаю профессиональную литературу" required/> Читаю профессиональную литературу<br>
        <input type="radio" name="ukrainian" value="Могу проходить интервью" required/> Могу проходить интервью<br>
        <input type="radio" name="ukrainian" value="Свободно владею" required/> Свободно владею<br>
    </p>
    <p>Английский: <input type="radio" name="english" value="Базовые знания" required/> Базовые знания <br>
        <input type="radio" name="english" value="Читаю профессиональную литературу" required/> Читаю профессиональную литературу<br>
        <input type="radio" name="english" value="Могу проходить интервью" required/> Могу проходить интервью<br>
        <input type="radio" name="english" value="Свободно владею" required/> Свободно владею<br>
</p>
<input type="submit" value="Отправить" name="отправить">
    </form>
</body>
</html>

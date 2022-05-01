<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гра "Міста"</title>
</head>
<body>
    <form action="/form2.php" method="get">

 <p>Ви назвали місто: 
        </p>   
    <?php
        require_once('/var/www/html/classes/Player.php'); 
        echo (PlayersCookie::SaveCookie($cities));
    ?>
    <p> Гравець 2 назвав місто:

    <?php   
        require_once('/var/www/html/classes/Computer.php');
    ?>
    
    </p>   

    <p>Введіть назву міста: 

        <input type="text" name="city" required/>
        
        </p>   
 <input type="submit" value="Грати" name="Грати">
</p>   
    
       
       
    </form>
</body>
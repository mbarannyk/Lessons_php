

<?php
    
   
    
    class PlayersCookie
    {
        private array $cities;
    
        static function SaveCookie ($cities) {
        
            if (isset($_COOKIE['city'])) {
        $cities[] = $_COOKIE['city'];
        setcookie($_GET['city'], serialize($cities), time()+900);
       
        }  else {
            $cities[] = $_GET['city'];
            setcookie($_GET['city'], serialize($cities), time()+900);
           
    }  
     echo ($_GET['city']);
    
    }
    }
    
   
    
    
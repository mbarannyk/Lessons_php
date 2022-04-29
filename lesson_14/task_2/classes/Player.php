

<?php
    
   
    
    class PlayersCookie
    {
        private array $cities;
    
        static function SaveCookie ($cities) {
        
            if (isset($_COOKIE['city'])) {
        $cities[] = $_COOKIE['city'];
        setcookie($_GET['city'], serialize($cities), time()+3600);
        $cities1 = unserialize($_COOKIE['city'], ["allowed_classes" => false]);
        
        }  else {
            $cities[] = $_GET['city'];
            setcookie($_GET['city'], serialize($cities), time()+3600);
            $cities1 = unserialize($_COOKIE['city'], ["allowed_classes" => false]); 
    }  
     echo ($_GET['city']);
    
    }
    }
    
    echo (PlayersCookie::SaveCookie($cities));
    
    
<?php
    
   
    
    class PlayersCookie
    {
        public array $cities;
    
        static function SaveCookie ($cities) {
        
            
          if ($_COOKIE['letter1'] === mb_strtolower(mb_substr($_GET['city'], 0, 1))) {
          echo $_GET['city']; 
          } else {
              echo 'Перша буква назви міста не відповідає правилам гри. Ви програли(';
            }



            if (isset($_COOKIE['city'])) {
        $cities[] = $_COOKIE['city'];
        setcookie($_GET['city'], serialize($cities), time()+900);
        $cities1 = unserialize($_COOKIE['city'], ["allowed_classes" => false]);
       
        }  else {
            $cities[] = $_GET['city'];
            setcookie($_GET['city'], serialize($cities), time()+900); 
            $cities1 = unserialize($_COOKIE['city'], ["allowed_classes" => false]);     
        } 
    }
    }
    
    
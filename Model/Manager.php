<?php

namespace App\Model;

use mysqli;

class Manager {
    
    public function dbConnect() {
        try {
            // $db = new mysqli("192.168.43.109", "mglsi_user", "passer", "mglsi_news");
            // $db = new \PDO('mysql:host=172.20.10.4;dbname=mglsi_news', 'mglsi_user', 'passer', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            $db = new \PDO('mysql:host=localhost;dbname=mglsi_news', 'root', 'root', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            // var_dump($db);
            return $db;    //code...
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }
        
    }
    
    
    
}

?>
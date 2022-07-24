<?php

    require_once('Controller/UserController.php');

    $userController = new \App\Controller\UserController();
    
    try {
            $userController->home();
        
    } catch (\Throwable $th) {
        //throw $th;
    }
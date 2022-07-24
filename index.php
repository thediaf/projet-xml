<?php

    require_once('Controller/UserController.php');
    require_once('Controller/FileController.php');

    $userController = new \App\Controller\UserController();
    $fileController = new \App\Controller\FileController();
    
    try {
        if(isset($_GET['action']))
        {
            if ($_GET['action'] == "login")
            {
                $userController->login();
            }
            elseif ($_GET['action'] == "signup")
            {
                
                $userController->signup();
            }
            elseif ($_GET['action'] == "movie")
            {
                
                $fileController->create();
            }
        }
        else{
            $userController->home();
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
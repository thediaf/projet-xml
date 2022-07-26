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
                
                $fileController->movie();
            }
            elseif ($_GET['action'] == "examen")
            {
                
                $fileController->examen();
            }
            elseif ($_GET['action'] == "restaurant")
            {
                
                $fileController->restaurant();
            }
            elseif ($_GET['action'] == "showExamen")
            {
                
                $fileController->showExamen();
            }
            elseif ($_GET['action'] == "showMovie")
            {
                
                $fileController->showMovie();
            }
            elseif ($_GET['action'] == "showRestau")
            {
                
                $fileController->showRestau();
            }
        }
        else{
            $userController->home();
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
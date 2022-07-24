<?php

    require_once('Controller/UserController.php');

    $userController = new \App\Controller\UserController();
    
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
        }
        else{
            $userController->home();
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
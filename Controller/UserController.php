<?php
namespace App\Controller;

use App\Model\UserModel;

require_once('Model/UserModel.php');


class UserController 
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();   
    }

    public function home()
    {
        session_start();
        require('View/home.php'); 
    }

    public function login()
    {
        if(!empty($_POST['login']) && !empty($_POST['password']))
        {
            $login = htmlspecialchars($_POST['login']);
            
            $password = htmlspecialchars($_POST['password']);
            $response = $this->model->getUser($login);

            if (password_verify($password, $response['password'])) 
            {
                session_start();
                $_SESSION["loggedIn"] = true;
                
                require('View/home.php');
            }else {
            # code...
            require('View/login.php'); 
            }

        }
        // $categories = $this->model->getCategories();
        else {
            # code...
            require('View/login.php'); 
        }
    }

    public function signup()
    {
        if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
        {
            // Patch XSS
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $password_retype = htmlspecialchars($_POST['password_retype']);
            
            if($password === $password_retype){ // si les deux mdp saisis sont bon

                // On hash le mot de passe avec Bcrypt, via un coût de 12
                $cost = ['cost' => 12];
                $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                $response = $this->model->new($login, $password);
                // On redirige avec le message de succès
                if ($response) {
                    session_start();
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["id"] = $response['id'];
                    $_SESSION["login"] = $response['login'];
                    $this->home();
                }
                else
                    $this->signup();
            }
            
        }          
        else {
            // $categories = $this->model->getCategories();
            require('View/signup.php'); 
        }
    }

}
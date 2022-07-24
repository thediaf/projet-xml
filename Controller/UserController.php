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
                $_SESSION["id"] = $response['id'];
                $_SESSION["login"] = $response['login'];  
                
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

}
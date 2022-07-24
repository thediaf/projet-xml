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

}
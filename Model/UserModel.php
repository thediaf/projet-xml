<?php
namespace App\Model;

require_once('Model/Manager.php');

use App\Model\Manager;

class UserModel extends Manager
{
    protected $connexion;

    public function __construct()
    {
        $this->connexion  = $this->dbConnect();
    }

}
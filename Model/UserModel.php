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

    public function getUser($login)
    {

        $sql = 'SELECT * FROM user WHERE login = ?';
        $query =  $this->connexion->prepare($sql);
        $query->execute(array($login));

        return $query->fetch();

    }

    public function new($login, $password)
    {
        $request = $this->connexion->prepare('INSERT INTO user(login, password) VALUES(:login, :password)');
        
        return $request->execute(array(
                    'login' => $login,
                    'password' => $password
                ));
    }
}
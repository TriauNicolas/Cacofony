<?php

namespace App\Manager;

use App\Core\BaseClasse\BaseManager;
use App\Entity\User;

class UserManager extends BaseManager
{
    public function findAllUsers()
    {
        $query = 'SELECT * FROM User';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[0];

        // return new User($result);
    }

    public function insertUser($login, $password)
    {
        $query = 'INSERT INTO User (lastname, firstname, email, `password`,  isadmin) VALUES ("test", "testre", :login, :password, 0)';
        $stmnt = $this->pdo->prepare($query);
        $result = $stmnt->execute([
            'login' => $login,
            'password' => $password
        ]);
    }
}


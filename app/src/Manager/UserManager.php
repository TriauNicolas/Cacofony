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

    public function insertUser()
    {
        $query = 'INSERT INTO User (lastname, firstname, email, `password`,  isadmin) VALUES ("test", "testre", "testrretest@gmail.com", "tetete", 0)';
        // $query = "INSERT INTO `User`(`id`, `lastname`, `firstname`, `email`, `password`, `isadmin`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
        $stmnt = $this->pdo->prepare($query);
        $result = $stmnt->execute();
    }
}


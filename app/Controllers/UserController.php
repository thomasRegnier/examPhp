<?php

namespace App\Controllers;

use PDO;
use App\Models\User;

class UserController
{
    public function index()
    {

        $db = new PDO('mysql:host='.getenv('DB_HOST').';port='.getenv('DB_PORT').
            ';dbname='.getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));


        $query = $db->query('SELECT * FROM users');
        $users = $query->fetchAll(PDO::FETCH_OBJ);

        $userObject = [];

        foreach($users as $userDb) {
            $user = new User;
            $user->setFirstName($userDb->first_name);
            $user->setEmail($userDb->email);
            $user->setLastName($userDb->last_name);
            $user->setId($userDb->last_name);
            $user->setPassword($userDb->password);
            $user->setCreatedAt($userDb->created_at);
            $user->setCreatedAt($userDb->updated_at);

            $userObject[] = $user;
        }


        require __DIR__ . '/../views/home.php';
    }
}

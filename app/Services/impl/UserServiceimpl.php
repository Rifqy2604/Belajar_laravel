<?php

namespace App\Services;

use function Laravel\Prompts\password;

class UserServiceimpl implements UserService {
    private array $users = [
        "rifqy"=> "zain"
    ];
    function Login(string $user, string $password): bool
    {
        if(!isset($this->users[$user])) {
            return false;
        }


        $correctPasword = $this->users[$user];
        return $password == $correctPasword;

    }


}
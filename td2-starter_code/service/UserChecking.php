<?php

class UserChecking
{
    public function authenticate($login, $password, $dataUsers)
    {
        $user = $dataUsers->getUser($login, $password);
        return $user != null;
    }
}

<?php

class UserCreation
{
    public function createUser($login, $password, $name, $firstName, $dataUsers)
    {
        return $dataUsers->createUser($login, $password);
    }
}

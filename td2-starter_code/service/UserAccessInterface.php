<?php

interface UserAccessInterface
{
    public function getUser($login, $password);

    public function createUser($login, $password);
}

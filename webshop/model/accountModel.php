<?php

class accountModel
{
    private $email;
    private $password;
    private $role;

    public function __construct($email, $password, $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}

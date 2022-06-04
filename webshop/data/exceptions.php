<?php

class signUpException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        echo "<div class='alert alert-danger'>Signup error: {$message}</div>";
    }
}

class loginException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        echo "<div class='alert alert-danger'>Login error: {$message}</div>";
    }
}

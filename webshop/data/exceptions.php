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

class inputException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        echo "<div class='alert alert-danger'>Input error: invalid {$message}. Try again</div>";
    }
}

class regularException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        echo "<div class='alert alert-danger'>Error: {$message}</div>";
    }
}

class databaseException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        echo "<div class='alert alert-danger'>Database error: {$message}</div>";
    }
}

class createException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        echo "<div class='alert alert-danger'>Create error: {$message}.Try again</div>";
    }
}

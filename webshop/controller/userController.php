<?php
require "../data/loginData.php";
require "crudController.php";

class userController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new loginData();
    }

    public function create($data)
    {
    }

    public function readAll()
    {
    }

    public function read($id)
    {
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}

<?php
require "../data/orderData.php";
require "crudController.php";

class orderController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new orderData();
    }

    public function create($data)
    {
    }
    public function readAll()
    {
        $this->data->getAll();
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

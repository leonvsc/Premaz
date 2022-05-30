<?php
require_once "../data/customerData.php";
require_once "crudController.php";

class customerController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new customerData();
    }

    public function create($data)
    {
    }

    public function readAll()
    {
        return $this->data->getAll();
    }

    public function read($id)
    {
        return $this->data->getById($id);
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}

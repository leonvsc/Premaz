<?php

require_once "../data/invoiceData.php";
require_once "crudController.php";

class invoiceController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new invoiceData();
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

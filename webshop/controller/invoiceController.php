<?php

require_once "../data/invoiceData.php";

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

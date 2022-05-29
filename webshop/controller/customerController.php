<?php
require_once "../data/customerData.php";

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

<?php
require_once "../data/productData.php";

class productController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new productData();
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

<?php
require_once "../data/shoppingCartData.php";

class shoppingCartController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new shoppingCartData();
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

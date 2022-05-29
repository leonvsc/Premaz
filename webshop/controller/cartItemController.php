<?php
require_once "../data/cartItemData.php";
class cartItemController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new cartItemData();
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

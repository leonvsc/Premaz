<?php
require_once "../data/paymentData.php";

class paymentController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new paymentData();
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

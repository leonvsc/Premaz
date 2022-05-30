<?php
require_once "../data/billingAddressData.php";

class billingAddressController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new billingAddressData();
    }

    public function create($data)
    {
    }

    public function readAll()
    {
    }

    public function read($id)
    {
        return $this->data->getById($id);
    }

    public function readCustomerNumber($customerNumber)
    {
        return $this->data->getByCustomerNumber($customerNumber);
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}

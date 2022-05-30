<?php
require_once "../data/shippingAddressData.php";

class shippingAddressController implements ICrudController
{
    private $data;

    public function __construct()
    {
        $this->data = new shippingAddressData();
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

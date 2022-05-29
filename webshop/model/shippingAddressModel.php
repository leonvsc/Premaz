<?php
class shippingAddressModel
{
    private $shippingAddressID;
    private customerModel $customer;
    private $street;
    private $houseNumber;
    private $postalCode;
    private $city;
    private $country;

    public function __construct($shippingAddressID, customerModel $customer, $street, $houseNumber, $postalCode, $city, $country)
    {
        $this->shippingAddressID = $shippingAddressID;
        $this->customer = $customer;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
    }

    public function getShippingAddressID()
    {
        return $this->shippingAddressID;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setShippingAddressID($shippingAddressID)
    {
        $this->shippingAddressID = $shippingAddressID;
    }

    public function setCustomer(customerModel $customer)
    {
        $this->customer = $customer;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
}

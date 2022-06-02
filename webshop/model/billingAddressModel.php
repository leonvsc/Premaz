<?php

// Een klasse met een model voor billingAddress. Hier bevinden alle methodes met getters en setters.
class billingAddressModel
{
    private $billingAddressID;
    private customerModel $customer;
    private $street;
    private $houseNumber;
    private $postalCode;
    private $city;
    private $country;

    public function __construct($billingAddressID, customerModel $customer, $street, $houseNumber, $postalCode, $city, $country)
    {
        $this->billingAddressID = $billingAddressID;
        $this->customer = $customer;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
    }

    public function getBillingAddressID()
    {
        return $this->billingAddressID;
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

    public function setBillingAddressID($billingAddressID)
    {
        $this->billingAddressID = $billingAddressID;
    }

    public function setCustomer($customer)
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

<?php

class billingAddressModel
{
    private $billingAddressID;
    private $street;
    private $houseNumber;
    private $postalCode;
    private $city;
    private $country;

    public function __construct($billingAddressID, $street, $houseNumber, $postalCode, $city, $country)
    {
        $this->billingAddressID = $billingAddressID;
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
}

// TODO: Maak de get functies.
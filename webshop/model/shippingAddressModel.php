<?php
class shippingAddressModel
{
    private $shippingAddressID;
    private $street;
    private $houseNumber;
    private $postalCode;
    private $city;
    private $country;

    public function __construct($shippingAddressID, $street, $houseNumber, $postalCode, $city, $country)
    {
        $this->shippingAddressID = $shippingAddressID;
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
    }
}

// TODO: maak de get functies.
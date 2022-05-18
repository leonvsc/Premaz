<?php
require_once 'accountModel.php';

class customerModel
{
    private $customerNumber;
    private accountModel $account;
    private $firstName;
    private $lastName;
    private $phoneNumber;

    public function __construct($customerNumber, accountModel $account, $firstName, $lastName, $phoneNumber)
    {
        $this->customerNumber = $customerNumber;
        $this->account = $account;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
    }

    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}

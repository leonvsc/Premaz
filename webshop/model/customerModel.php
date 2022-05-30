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

    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
    }

    public function setAccount(accountModel $account)
    {
        $this->account = $account;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
}

<?php
require_once 'accountModel.php';
require_once 'billingAddressModel.php';
require_once 'shippingAddressModel.php';
require_once 'shoppingCartModel.php';

class customerModel{
    private $customerNumber;
    private accountModel $account;
    private billingAddressModel $billingAddress;
    private shippingAddressModel $shippingAddress;
    private $firstName;
    private $lastName;
    private $phoneNumber;

    public function __construct($customerNumber, accountModel $account, billingAddressModel $billingAddress, shippingAddressModel $shippingAddress, $firstName, $lastName, $phoneNumber){
        $this->customerNumber = $customerNumber;
        $this->account = $account;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
    }

}

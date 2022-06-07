<?php
require_once "accountModel.php";

// Een klasse met een model voor shoppingCart. Hier bevinden alle methodes met getters en setters.
class shoppingCartModel
{
    private $shoppingCartID;
    private accountModel $account;

    public function __construct($shoppingCartID, accountModel $account)
    {
        $this->shoppingCartID = $shoppingCartID;
        $this->account = $account;
    }

    public function getShoppingCartID()
    {
        return $this->shoppingCartID;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function setShoppingCartID($shoppingCartID)
    {
        $this->shoppingCartID = $shoppingCartID;
    }

    public function setAccount($account)
    {
        $this->account = $account;
    }
}

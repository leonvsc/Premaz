<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../controller/orderController.php';

// Unit test om te kijken of de functie readByCustomerNumber een array teruggeeft
final class orderControllerTest extends TestCase
{
    public function testreadByCustomerNumber()
    {
        $orderController = new orderController();
        $orderinfo = $orderController->readByCustomerNumber("CM00001");
        $this->assertIsArray($orderinfo);
    }
}
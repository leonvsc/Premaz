<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../model/orderModel.php';

// Unit test om te kijken of de orderModel het atribuut orderDate heeft
final class orderModelTest extends TestCase
{
    public function testAttributeExists()
    {
        $this->assertClassHasAttribute('orderDate', orderModel::class);
    }
}
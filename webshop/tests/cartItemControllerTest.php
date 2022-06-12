<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../controller/cartItemController.php';

// Unit test om te kijken of de functie readAll een array teruggeeft
final class cartItemControllerTest extends TestCase
{
    public function testReadAll()
    {
        $cartItemController = new cartItemController();
        $cartItemInfo = $cartItemController->readAll();
        $this->assertIsArray($cartItemInfo);
    }
}
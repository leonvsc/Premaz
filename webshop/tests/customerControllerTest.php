<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../controller/customerController.php';

// Unit test om te kijken of de customerController het atribuut data heeft
final class customerControllerTest extends TestCase
{
    public function testAttributeExists()
    {
        $this->assertClassHasAttribute('data', customerController::class);
    }
}
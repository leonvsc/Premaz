<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../data/invoiceData.php';

// Unit test om te kijken of de invoiceData het atribuut db heeft
final class invoiceDataTest extends TestCase
{
    public function testAttributeExists()
    {
        $this->assertClassHasAttribute('db', invoiceData::class);
    }
}
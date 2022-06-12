<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../data/productData.php';
require_once dirname(__FILE__) . '/../data/database.php';
// Unit test 1: Test of de output van de database wordt omgezet naar een array
final class productDataTest extends TestCase
{
    public function testGetById()
    {
        $productData = new productData;
        $productInfo = $productData->getById("EXT-HDD-MID-001");
        $this->assertIsArray($productInfo);
    }
}
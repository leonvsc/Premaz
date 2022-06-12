<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../data/productData.php';

final class productDataTest extends TestCase
{
    public function testGetById()
    {
        $productData = new productData;
        $productInfo = $productData->getById("EXT-HDD-MID-001");
        $this->assertIsArray($productInfo);
    }
}
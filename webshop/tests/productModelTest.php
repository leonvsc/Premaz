<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../model/productModel.php';

// Unit test om te kijken of de functies in de productModel werken
final class productModelTest extends TestCase
{
    public function testconstruct()
    {
        $productModel = new productModel("EXT-HDD-MID-001", "Toshiba - Externe Harde Schijf", 65, 39, "External Drive");
        $productInfo = $productModel->getProductName();
        $this->assertSame($productInfo, "Toshiba - Externe Harde Schijf");
    }
}
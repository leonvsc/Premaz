<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include "../model/productModel.php";

final class productModelTest extends TestCase
{
    public function testClassConstructor()
    {
        $productModel = new productModel("testSKU", "testProductName", 123.45, 2, "testCategory");

        $this->assertSame('testSKU', $productModel->SKU);
        $this->assertSame(18, $productModel->price);
        $this->assertEmpty($productModel->order);
    }
}
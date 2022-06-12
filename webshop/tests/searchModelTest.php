<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../model/searchModel.php';

// Unit test om te kijken of de functies in de searchModel werken
final class searchModelTest extends TestCase
{
    public function testconstruct()
    {
        $searchModel = new searchModel(1, "Search test");
        $searchInfo = $searchModel->getSearchTerm();
        $this->assertSame($searchInfo, "Search test");
    }
}
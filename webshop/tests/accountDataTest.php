<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../data/accountData.php';

// Unit test om te kijken of de functie getAll een array teruggeeft
final class accountDataTest extends TestCase
{
    public function testgetAll()
    {
        $accountData = new accountData();
        $accountInfo = $accountData->getAll();
        $this->assertIsArray($accountInfo);
    }
}
<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../data/database.php';

// // Unit test om te kijken of de database een object teruggeeft
final class databaseTest extends TestCase
{
    public function testConnect()
    {
        $database = new database;
        $databaseInfo = $database->connect();
        $this->assertIsObject($databaseInfo);
    }
}
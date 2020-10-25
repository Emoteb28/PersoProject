<?php

namespace App\Tests\Entity;
use App\Entity\Country;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
public function testUri() {
    $country = new Country();
    $capital = "Oslo";

    $country->setCapital($capital);
    $this->assertEquals("Oslo", $country->getCapital());
    }

public function testSomething() {
        $this->assertTrue(true);
    }
}
<?php

namespace Otrsw\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Otrsw\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilogram_to_lbs() {
        
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);

    }
}

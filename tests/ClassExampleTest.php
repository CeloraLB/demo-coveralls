<?php

namespace Tests;

use App\ClassExample;
use PHPUnit\Framework\TestCase;

class ClassExampleTest extends TestCase
{
    public function setUp(): void
    {
        $this->obj = new ClassExample();
    }

    /**
     * @covers App\ClassExample
     */
    public function testSum(){
        $numbers = [1,2,3];

        $result = $this->obj->sum($numbers);

        $this->assertEquals(6, $result);
    }
}
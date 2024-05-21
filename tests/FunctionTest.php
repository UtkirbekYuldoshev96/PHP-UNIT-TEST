<?php

use PHPUnit\Framework\TestCase;

require './functions.php';
class FunctionTest extends TestCase
{
    public function testKey()
    {
        $this->assertTrue(true);
    }

    public function testFunctionResalt()
    {
        $natija = addNumbers(11, 25);
        $this->assertSame(36, $natija);
    }
}

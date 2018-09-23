<?php

require 'vendor/autoload.php';
require_once ('vendor/phpunit/php-code-coverage/tests/TestCase.php');
require 'calculator.php';
 
class CalculatorTests extends PHPUnit\Framework\TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}

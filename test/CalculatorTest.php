<?php

require_once 'Calculator.php';

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/8/17
 * Time: 08:11
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    function testAdd(){
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals($result, 5);
    }

    function testAddMax(){
        $this->expectException(Exception::class);
        $calculator = new Calculator();
        $result = $calculator->add(PHP_INT_MAX, 1);
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 6/8/17
 * Time: 08:11
 */
class Calculator
{
    function add($a, $b){
        if($a /2 + $b / 2 >= PHP_INT_MAX / 2){
            throw new Exception("Out of range");
        }
        return $a + $b;
    }
}
<?php

class Number {
    public function __construct(
    public int|float $number
  ) {}
}

$number = new Number(number:44);

var_dump($number->number);

$number = new Number(number:44.5);

var_dump($number->number);

new Number("NaN");

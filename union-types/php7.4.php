<?php

class Number {
    /** @var int|float */
    public $number;

    /**
     * @param float|int $number
     */
    public function __construct($number) {
        $this->number = $number;
    }
}

$number = new Number('NaN');

var_dump($number->number);

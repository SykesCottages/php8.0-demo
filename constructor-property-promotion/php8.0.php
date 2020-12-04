<?php

class Point
{
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0
    ) {}
}

$point = new Point(y:4);

var_dump($point->y);
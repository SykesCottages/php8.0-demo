<?php

switch (8.0) {
    case '8.0':
        $match = "Oh no!";
        break;
    case 8.0:
        $match = "This is what I expected";
        break;
}

var_dump($match);

$match = match (8.0) {
    '8.0' => "Oh no!",
    8.0 => "This is what I expected",
};

var_dump($match);
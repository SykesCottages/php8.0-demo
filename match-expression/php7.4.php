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

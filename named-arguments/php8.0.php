<?php

$string = 'some examples';

$cleanedString = htmlspecialchars($string, double_encode: false);

var_dump($cleanedString);

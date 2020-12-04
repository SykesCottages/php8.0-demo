<?php

$string = 'some examples';

$cleanedString = htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

var_dump($cleanedString);

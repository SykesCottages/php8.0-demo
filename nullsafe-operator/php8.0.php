<?php

$session = (object)[];

$country = $session?->user?->getAddress()?->country;

var_dump($country);
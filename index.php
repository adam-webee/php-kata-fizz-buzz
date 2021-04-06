<?php

$number = $argv[1];
$result = $number;

if ($number % 2 == 0) {
        $result = 'fizz';
}

if ($number % 3 == 0) {
        $result = 'buzz';
}

if ($number % 2 == 0 && $number % 3 == 0) {
        $result = 'fizzbuzz';
}

echo 'You said ' . $result . '!';


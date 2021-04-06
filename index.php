<?php

$number = $argv[1];
$resultMap = ['fizzbuz', 'buzz', 'fizz', $number, 'fizz', $number];
$index = ($number % 2) + (($number % 3) * 2);

echo "You said {$resultMap[$index]}!";

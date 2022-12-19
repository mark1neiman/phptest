<?php


$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = [10, 20, 30, 11, 14, 15, 16, 17, 99, 72];

$result = array_map(function($a, $b) {
    return $a * $b;
}, $array1, $array2);

print_r($result);




$wishes = ['happiness', 'health', 'success', 'love', 'joy'];
$epithets = ['infinite', 'unending', 'endless', 'eternal', 'unfailing'];

echo "Enter the name of the birthday person: ";
$name = readline();

$wish1 = $wishes[array_rand($wishes)];
$wish2 = $wishes[array_rand($wishes)];
$wish3 = $wishes[array_rand($wishes)];
$epithet1 = $epithets[array_rand($epithets)];
$epithet2 = $epithets[array_rand($epithets)];
$epithet3 = $epithets[array_rand($epithets)];

$greeting = "Happy birthday, $name! May your day be filled with $epithet1 $wish1, $epithet2 $wish2, and $epithet3 $wish3.";

echo $greeting;

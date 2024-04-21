<?php 
    declare(strict_types=1);
?>

<h1>Lesson 27</h1>
<?php
require "helpers.php";

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

echo "<h3>Array chunk</h3>";
prettyPrintArray(array_chunk($items,3));
echo "<br />";

// array filter
$array = [1,2,3,4,5,6,7,8,9,10];

$even = array_filter($array, fn($number) => $number % 2 === 0);
$even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

echo "<h3>Array filter</h3>";
prettyPrintArray(array_values($even));

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

$keys = array_keys(($items));
prettyPrintArray($keys);

echo "<h3>Array map</h3>";
$array = [1,2,3,4,5,6,7,8,9,10];

$array = array_map(fn($number) => $number*3, $array);
prettyPrintArray($array);

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($number1, $number2) => $number1*$number2, $array1, $array2);
prettyPrintArray($array);

echo "<h3>Array marge</h3>";
$array1 = [1,2,3];
$array2 = ["a" => 4,'b' => 5,'c' => 6];
$array3 = [7,8,9];

$merged = array_merge($array1, $array2, $array3);
prettyPrintArray($merged);

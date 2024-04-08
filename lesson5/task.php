<?php 
    declare(strict_types=1);

    function getName():string{
        $letters = range('A', 'Z');
        shuffle($letters);
        $number = mt_rand(100,999);

        return "$letters[0]$letters[1]$number";
    }

    print(getName());
    echo "<br>";

    function isArmstrongNumber(int $number): bool{
       $digits = str_split((string) $number);
       $digitsCount = count($digits);

       $digits = array_map(function ($digit) use($digitsCount){
        return $digit**$digitsCount;
       }, $digits);

       return array_sum($digits) === $number;
    }

    print_r(isArmstrongNumber(153));
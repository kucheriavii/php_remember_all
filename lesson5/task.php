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
        $sNum = (string)$number;
        $pow = strlen($sNum);                
        
        $answer = 0;
        for ($i=0; $i<$pow; $i++){
            $answer += $sNum[$i]**$pow;
        }
        
        return $number === $answer?True:False;
    }

    print_r(isArmstrongNumber(91));
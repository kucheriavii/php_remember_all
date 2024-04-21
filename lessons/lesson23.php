<?php 
    declare(strict_types=1);
?>
<h1>Lesson 23</h1>
<?php
    function foo(...$numbers):int|float{
        $sum = 0;

        foreach($numbers as $number){
            $sum += $number;
        }

        return $sum;
        
    }
    $a = 50;
    $b = 10;
    echo foo($a, $b,10,10,10,20);
    echo "<br/>";
    var_dump($a, $b, 50)
?>
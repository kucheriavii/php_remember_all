<h2>Lesson 14</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
    $multiplier = 2;

    $multiply = fn ($num) => $num * $multiplier;

    function anotherMultily($num){
        return $num * 25;
    }

    function sum (int|float $a, int|float $b, callable $callback){
        return $callback($a + $b);
    }

    echo sum(5,2, 'anotherMultily');

    echo "<br>" . $multiplier;
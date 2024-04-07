<h2>Lesson 13</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
    $multiplier = 20;
    $multiply = fn ($num) => $num*$multiplier;

    function sum($a, $b, $callback){
        return $callback($a,$b);
    }

    echo $multiplier . '<br>';
    echo sum(2,2, $multiply);
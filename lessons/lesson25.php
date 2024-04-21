<?php 
    declare(strict_types=1);
?>
<h1>Lesson 25</h1>
<?php

    function sum(int|float ...$numbers): int|float {
        return array_sum($numbers);
    }

    $x = 'sum';
    if (is_callable($x)){        
        echo $x(1,2,3,4,5);
    } else {
        echo 'Not Callable';
    }
    echo "<br />";
    //  ----- Anonomys function -----

    $x = 100; //to use $x in anonomys function try use()

    $test = function (int|float ...$numbers) use(&$x): int|float {
        return array_sum($numbers)*$x;
        $x = 1500;
    };

    echo $test(2,3,4,5);
    echo '<br .>' . $x;

    //  ----- Anonomys function -----
    $array = [1,2,3,4];
    $array2 = array_map(function($element){
        return $element*2;
    }, $array);

    print_r($array2);

    //  ----- Anonomys function -----

    $array = [1,2,3,4];

    $array3 = array_map(fn($n) => $n**2, $array);

    echo "<pre>";
    print_r($array3);
    echo "</pre>";

<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 1</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php
    function codeColor($color){
        switch ($color){
            case (0):
                echo "black";
                break;
            case (1):
                echo "brown";
                break;
            case (2):
                echo "red";
                break;
            case (3):
                echo "orange";
                break;
            case (4):
                echo "yellow";
                break;
            case (5):
                echo "green";
                break;
            case (6):
                echo "blue";
                break;
            case (7):
                echo "violet";
                break;
            case (8):
                echo "grey";
                break;
            case (9):
                echo "white";
                break;
            default:
                echo "wrong parameter";
                break;
        }
    }

    function colorCode(string $color):int{
        $colors = [
            'black' => 0,
            'brown' => 1,
            'red' => 2,
            'orange' => 3,
            'yellow' => 4,
            'green' => 5,
            'blue' => 6,
            'violet' => 7,
            'grey' => 8,
            'white' => 9
        ];

        return $colors[$color];
    };

    echo colorCode("white");
    codeColor(2);


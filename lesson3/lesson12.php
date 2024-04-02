<?php 
declare(strict_types=1); #Включити сувору типизацію
?>
<h2>Lesson 12</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php

    for ($i=1; $i<=15; $i++){
        if ($i===6){
            continue;
        }
        echo $i . "<br />";
        if ($i == 10){
            break;
        }
    };









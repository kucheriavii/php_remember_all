<h2>Lesson 2</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php

    $score = 55;
    if ($score > 90){
        var_dump('A');
    } else if ($score > 80) {
        var_dump('B');
    } else if ($score > 70) {
        var_dump('C');
    } else {
        var_dump('F');
    }



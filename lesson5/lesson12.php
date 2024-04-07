<h2>Lesson 5</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
    function foo(){
        static $a = 1;

        return $a++;
    }


    echo foo() . "<br>";
    echo foo() . "<br>";
    echo foo() . "<br>";

<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 7</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
    function sum(int|float ...$nums) : int|float {
        $ans = 0;
        for ($i = 0; $i<count($nums); $i++){
             $ans += $nums[$i];
        }

        return $ans;
    }

    echo sum(5,2,1);
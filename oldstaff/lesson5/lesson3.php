<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 3</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php   
    $names = ['John', 'Jane', 'Bob'];
    echo $names[1];
    unset($names[1]);
    echo $names[2];
    print_r($names);
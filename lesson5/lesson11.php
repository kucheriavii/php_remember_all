<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 10</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
    global $x;
    $x=5;
    
    include 'example.php';
    
    for ($i=1; $i<10; $i++){
        echo $x;
    }

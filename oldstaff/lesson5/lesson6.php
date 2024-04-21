<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 6</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<!-- <?php   
    $permission = 1;
    if ($permission === 1){
    ?>
    
    <h1>Hello admin</h1>
    <?php
    } else if ($permission === 2){
        ?>
    
    <h1>Hello mod</h1>
    
    <?php
    } else { 
        ?> <h1>hello guest</h1>    
    <?php 
    } ?> -->

<?php $permission = 2; ?>

    <?php if ($permission === 1): ?>    
        <h1>Hello admin</h1>    
    <?php elseif ($permission === 2): ?>    
        <h1>Hello mod</h1>
    <?php else: ?>    
        <h1>Hello guest</h1>
    <?php endif; ?>

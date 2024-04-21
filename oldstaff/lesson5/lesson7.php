<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 7</h2>
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
    
    <?php

        function getPermission(){
            sleep(1);
            
            return 1;
        }

        $permission = getPermission();
    ?>


<?php
    switch (getPermission()){
        case 1:
            echo "<h1>Hello, Admin</h1>";
            break;    
        case 2:
            echo "<h1>Hello, Mod</h1>";
            break;
        default:
            echo "<h1>Hello, Pidar</h1>";
    }

function getUsers(){
    sleep(2);

    return ['John', 'Jane', 'Jane', 'Jane', 'Jane', 'Jane', 'Jane', 'Jane', 'Jane', 'Jane'];
}

$userCount = count(getUsers());
for ($i=0; $i<$userCount; $i++){
    echo $i;
}

?>


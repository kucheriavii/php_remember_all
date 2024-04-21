<?php 
    declare(strict_types=1);
?>
<h1>Lesson 24</h1>
<?php

   function getValue(){
    static $value = null;
    if ($value===null) {
        $value = someVeryExpensiveFunction();
     }
    
     return $value;
    }
    
    function someVeryExpensiveFunction(){
    sleep(2);    
    echo 'processing';
    return 10;
   }


   echo getValue() . '<br />';
   echo getValue() . '<br />';
   echo getValue() . '<br />';
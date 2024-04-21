<h2>Lesson 3</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php
    $paymentStatus = 3;

    switch($paymentStatus){
        case 1:
            var_dump('Success');
            break;

        case 2:
        case 3:
            var_dump('Pemding');
            break;
            
        default:
            var_dump('Unknown');
            break;

    }





<h2>Lesson 3</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php
    $paymentStatus = 2;

    $message = match($paymentStatus){
        1 => 'Success',
        2 => 'Denied',
        default => 'Uknown'
    };

    var_dump($message);







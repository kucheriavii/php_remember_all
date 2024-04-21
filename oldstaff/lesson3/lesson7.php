<h2>Lesson 7</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php

    function getStatus($paymentStatus, $showMessage=1){
        $message = match($paymentStatus){
            1 => 'Success',
            2 => 'Denied',
            default => 'Uknown'
        };
        
        if ($showMessage){
            var_dump($message);
        }

        return $message;
    }

    $statusMessage = getStatus(1);
    var_dump($statusMessage);











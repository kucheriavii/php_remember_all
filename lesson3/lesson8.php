<h2>Lesson 8</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php

    function getStatus(int|float $paymentStatus, bool $showMessage=true) : ?string{
        $message = match($paymentStatus){
            1 => 'Success',
            2 => 'Denied',
            default => 'Uknown'
        };
        
        if ($showMessage){
            var_dump($message);
            return null;
        }

        return $message;
    }

    $statusMessage = getStatus(1);
    var_dump($statusMessage);

    #Nothing done











<h2>Lesson 3</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php
    if(true){
        function getStatus(){
            $paymentStatus = 1;
            $message = match($paymentStatus){
                1 => 'Success',
                2 => 'Denied',
                default => 'Uknown'
            };
    
            var_dump($message);
        }
    }
    getStatus();










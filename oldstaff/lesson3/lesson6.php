<h2>Lesson 6</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php
    if(true){
        function getStatus($paymentStatus, $showMessage=1){
            $message = match($paymentStatus){
                1 => 'Success',
                2 => 'Denied',
                default => 'Uknown'
            };
            
            if ($showMessage){
                var_dump($message);
            }
        }
    }
    getStatus(1);










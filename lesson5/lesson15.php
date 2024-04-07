<h2>Lesson 15</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
    $myCup = 'empty';
    $myFriendsCup = 'empty';

    function fillCup(&$cupParam){
        $cupParam = 'filled';
    }

    fillCup($myCup);
    fillCup($myFriendsCup);

    echo $myCup;
    echo $myFriendsCup;
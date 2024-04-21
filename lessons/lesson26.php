<?php 
    declare(strict_types=1);
?>
<h1>Lesson 26</h1>
<?php

$currentTime = time();

echo $currentTime . "<br />";

echo $currentTime + 5*24*60*60 . '<br />';

echo $currentTime-60*60*24 . "<br />";

echo date('m/d/Y g:ia')."<br />";
echo date('m/d/Y g:ia',$currentTime + 5*24*60*60)."<br />";
echo date('m/d/Y g:ia', $currentTime-60*60*24)."<br />";

date_default_timezone_set('UTC');

echo date('m/d/Y g:ia')."<br />";
echo date('m/d/Y g:ia',$currentTime + 5*24*60*60)."<br />";
echo date('m/d/Y g:ia', $currentTime-60*60*24)."<br />";

echo date_default_timezone_get() . '<br >';

echo date('m/d/Y', mktime(0,0,0,4,10,null)) . "<br>";

$date = date('M/D/Y g:ia', strtotime('second friday of April'));

echo $date;
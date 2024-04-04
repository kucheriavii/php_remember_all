<?php 
    declare(strict_types = 1);
?>
<h2>Lesson 1</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php   
    const test = 1;
if (!defined('FOO')){
    define('FOO', 'Hello world');
}

    echo FOO;
    echo test;
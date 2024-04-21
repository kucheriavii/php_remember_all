<h2>Lesson 19</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 
$directory = scandir(__DIR__);


if (file_exists('example.txt')){
    echo "file found";
    echo filesize('example.txt');
    
    file_put_contents(
        'example.txt', 'Hello world'
    );

    clearstatcache();
    echo "<br>";
    echo filesize('example.txt');

    echo file_get_contents("example.txt");
}
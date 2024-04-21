<h2>Lesson 16</h2>
<a href="/php_remember_all">Back home</a>
<br />
<br />
<?php 

$users = ['John', 'Jane', 'Bob', null];

$users = array_filter($users, 
    fn($user) => $user !== "Bob"
);

echo "<pre>";
print_r($users);
echo "</pre>";


$users = array_map(
    fn($user) => $user . " just a test",
    $users
);

echo "<pre>";
print_r($users);
echo "</pre>";


$users = array_merge(
    $users,
    ['tzest', 'test2', 'test3']
);

echo "<pre>";
print_r($users);
echo "</pre>";

//при сортуванні не змінює індекси
asort($users);

echo "<pre>";
print_r($users);
echo "</pre>";

sort($users);

echo "<pre>";
print_r($users);
echo "</pre>";

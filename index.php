<?php 
#comment
//line comment

echo /*inner comment*/"Hello world<br/>";
echo "My name is Roman";

?>

<h1><?php echo "surprise"; ?></h1>

<?php

$age = 29;
$Age = 30;

echo $age;
echo "<br />";
echo $Age;
echo "<br />";

#functions

echo var_dump($Age);

echo "<br />";
$data = 'John';
$lastName = "Smith";

var_dump($data);
echo "<br />";
print("test $data");
var_dump($lastName[strlen($lastName)-1]);

echo "<br />";
$food1 = "Salad";
$food2 = "Pizza";

$data = ['Salad', 'Burger', 'Pizza'];
var_dump($data);
echo "<br />";
$data[] = 'Tomato';
var_dump($data);

echo "<br />";
$data = ['john' => 'Salad', 'jane' => 'Burger', 'sam' => 'Pizza'];
$data['piter'] = 'Chips';
var_dump($data);
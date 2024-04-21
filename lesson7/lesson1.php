<?php 
 require_once 'Account.php';

 $myAccount = new Account("Vasia", 50);
 $johnsAccount = new Account("Kateryna", 50);

 $myAccount->balance = 20;

$myAccount -> deposit(100)->deposit(100);

 var_dump($myAccount);
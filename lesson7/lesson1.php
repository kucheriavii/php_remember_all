<?php 
 require_once 'Account.php';

 $myAccount = new Account;
 $johnsAccount = new Account;

 $myAccount->balance = 20;

 var_dump($myAccount);
 echo "<br>";
 var_dump($johnsAccount);
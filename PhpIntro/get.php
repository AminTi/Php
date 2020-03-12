<?php

$name = $_GET['namn'];
$age  = $_GET['age'];


echo "<h1> Hej $name </h1>"; 
echo "<h2>Du är $age år gammal!</h2>"; 

// Test

echo "<hr>";
echo "<pre>";
print_r($_GET);
echo "</pre>"; 


?>



<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET-Requset</title>
</head>
<body>
  <h1>GET-Requset</h1>
  <h3>
    <a href="http://localhost/PHP/phpinfo.php?namn=Marwa&age=26">
   Marwa</A>
    </a>
  </h3>
  <h3>
    <a href="http://localhost/PHP/phpinfo.php?namn=Nawal&age=40">
    Nawal
    </a>
  </h3>
  <h3>
    <a href="http://localhost/PHP/phpinfo.php?namn=Amin&age=32">
    Amin
    </a>
  </h3>

</body>
</html>

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

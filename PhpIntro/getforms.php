



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><Form></Form></title>
</head>
<body>



<form action="#"  method="GET">
<input type="text" name="name" value="value">
<button type="submit"> CLICK</button></form>

<?php

   
   $amin =  $_GET["name"];


   if( $amin >= 18) {

 echo "Du får Handla Här";
   }
   else{
       echo "Du får inte handla här";
   }


?>
    
</body>
</html>
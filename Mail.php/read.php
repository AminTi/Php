<?php

require_once "db.php";
require_once "header.php";
require_once "delete.php";

$sql = "SELECT * FROM  contactform";
$stmt = $db->prepare($sql);
$stmt->execute();

$tabel  = '<table style=width:100%; 
 ">
  <tr>
  <td>Id</td>
  <td>Name</td>
  <td>Email/td>
  <td>Message</td>
  </tr>';

  
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $name = htmlspecialchars($row["name"]);
    $email = htmlspecialchars($row["email"]);
    $message = htmlspecialchars($row["message"]);
    $id = htmlspecialchars($row["id"]);

    $tabel .= " 
    <tr>
    <td>$id</td>
    <td>$name</td>
    <td>$email/td>
    <td>$message</td>
    <td> 
    <form action='#' method='POST'>
    <input type='submit'value='Radera'class='btn-success ' > 
    <input type='hidden'value='$id' name='id' > 
    </form>
    </td>
    </tr>";



}
echo $tabel .= "</table>";
    
?>
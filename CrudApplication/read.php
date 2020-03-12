<?php


$sql = "SELECT * FROM   AminTabel";
$stmt = $db->prepare($sql);
$stmt->execute();


$ul=  "<ul class='list-group'>";


while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   // print_r($row);
    
    $name = htmlspecialchars($row["name"]);
    $tel = htmlspecialchars($row["tel"]);
    $id = htmlspecialchars($row["id"]);


 $ul.= "<li class='list-group-item active mb-2' >  $name   $tel  </li>

<form action='delete.php?' method='POST'>
<input type='submit'value='Tabort'class='btn btn-danger  ' > 
<input type='hidden'value='$id' name='id' > 
</form>

<form action='uppdate.php?' method='POST'>
<input type='submit'value='Uppdatera'class='btn btn-success ' > 
<input type='hidden'value='$id' name='id' > 
</form>";
}

echo $ul.= "</ul>";

 

?>
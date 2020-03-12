<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'):
   


  $sql= "INSERT INTO AminTabel(name, tel) VALUES (:name, :tel)";

  $stmt = $db->prepare($sql);

 
  $name =  htmlspecialchars($_POST["name"]);
  $tel =   htmlspecialchars($_POST["tel"]);

  $stmt->bindParam(':name',  $_POST['name']);
  $stmt->bindParam(':tel',  $_POST['tel']);
  $stmt->execute();
 
 endif;

  

   
?>




<form action="#" method="POST">

<div class="row">

  <div class="col-md-5">
    <input 
      name="name"
      type="text" 
      placeholder="Ange namn" 
      class="form-control mb-3"
    >
  </div>
  <div class="col-md-5">
    <input 
      name="tel"
      type="mobile" 
      placeholder="Ange telefon" 
      class="form-control mb-3"
    >
  </div>
  <div class="col-md-2">
    <input 
      type="submit" 
      value="Lägg till"
      class="btn btn-outline-primary btn-block"
    >
  </div>

</div>

</form>

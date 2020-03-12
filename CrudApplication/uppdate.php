<?php

require_once 'db.php';
require_once 'header.php';




if($_SERVER['REQUEST_METHOD'] === 'POST'){

  print_r($_POST);
     $id = htmlentities($_POST['id']);
     $sql = "SELECT * FROM AminTabel WHERE id = :id";
     $stmt = $db->prepare($sql);
     $stmt->bindParam(':id' , $id );
     $stmt->execute();

     if($stmt->rowCount() > 0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $name = $row['name'];
        $tel  = $row['tel'];
      }
      
}

   if(isset($_POST["edit"])){
        
        $name = htmlentities($_POST['name']);
        $tel  = htmlentities($_POST['tel']);
        $id   = htmlentities($_POST['id']);
      
        $sql = "UPDATE AminTabel
                SET name = :name, tel = :tel 
                WHERE id = :id";
      
        $stmt = $db->prepare($sql);
      
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':tel' , $tel);
        $stmt->bindParam(':id'  , $id);
      
        $stmt->execute();
        header("location:index.php")
       
    }




  ?>

<form action="#" method="POST">

<div class="row">

  <div class="col-md-5">
    <input 
      name="name"
      type="text" 
      placeholder="Ange namn" 
      class="form-control mb-3"
      value="<?php echo $name ?>"
    >
  </div>
  <div class="col-md-5">
    <input 
      name="tel"
      type="text" 
      placeholder="Ange telefon" 
      class="form-control mb-3"
      value="<?php echo $tel ?>"
    >
  </div>
  <div class="col-md-2">
    <input 
      type="submit" 
      name="edit"
      value="Uppdatera"
      class="btn btn-outline-success btn-block"
      
     >
  </div>

</div>

<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>

<?php
  require_once 'footer.php';
?>
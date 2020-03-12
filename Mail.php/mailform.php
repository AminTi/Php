<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

//print_r($_POST);

$sql = "INSERT INTO contactform(name, email, message) VALUES (:name, :email, :message)";
$stmt = $db->prepare($sql);

$name =  htmlspecialchars($_POST["name"]);
$email =   htmlspecialchars($_POST["email"]);
$message =   htmlspecialchars($_POST["message"]);

  $stmt->bindParam(':name',  $_POST['name']);
  $stmt->bindParam(':email',  $_POST['email']);
  $stmt->bindParam(':message',  $_POST['message']);
  $stmt->execute();


}

?>
<form action="#" method="POST">

<div class="row">

   <label>Name</label>
    <input 
      name="name"
      type="text" 
      placeholder="Ange namn" 
      class="form-control mb-3"
    >

    <label>Email</label>
    <input 
      name="email"
      type="email" 
      placeholder="Email" 
      require
    
    >
    <label>Message</label>
   <textarea name="message" id="" cols="30" rows="10"></textarea>

    <input 
      type="submit" 
      value="Skicka"
      class="btn"
    >


</div>

</form>

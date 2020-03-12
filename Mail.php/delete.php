<?php


require_once "db.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   
    

    $id = htmlspecialchars($_POST['id']);
    print_r($id);

    $sql = "DELETE FROM contactform WHERE id=:id";
    
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();


}


    

<?php


require_once "db.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   
    print_r($_POST);


    $id = htmlspecialchars($_POST['id']);
    print_r($id);

    $sql = "DELETE FROM AminTabel WHERE id=:id";
    
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();


}

    header("Location:index.php");
    

<?php

header("Content-Type: application/json; charset=UTF-8");

$firstNames = ["Åsa","Nawal","Marwa","Alice","Belle","Angie","Vanessa","Selma","Lina","Sara"];
$lastNames = ["Öberg","Petersson","Schou","Titi","Ben","Majd","Jardin","Cardin","Ismaealson","Karlson"];
$gender = ["female","male"];
$firstmales = ["Ilyas","Amin","Malik","Per","Yassin","Chris","Roland","Piere","Malik","Amir"];


$limit = 10;

if(isset($_GET['limit']) ){


$limit = $_GET["limit"] = 10;
 
}

$names2 =[];
$names = [];

for ($i=0; $i < $limit; $i++) {

 $rndNames = rand(0,9);
 $rndLastnames = rand(0,9);


 $randGender = rand(0,1);

 if($randGender){
        $firstname = $firstNames[$rndNames];
        $gender = "Female";
      }else{
        $firstname = $firstmales[$rndNames];
        $gender = "Male";
      }

      $name = array("firstname"=>$firstname,
      "lastname"=>$lastNames[$rndLastnames],
      "gender" => $gender
    );
    
    $names[] = $name;
}

$json = json_encode($names,
JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;



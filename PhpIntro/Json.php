<?php


header('Content-Type:  application/json; charset=UTF-8');

$productName = ["A","b","c","d","e","f","j","h","l","m"];
$price = [100,200,300,400,500,600,700,800,900,1000];
$pics = [];
$photo = "https://picsum.photos/v2/list?page=2&limit=10";



$titi = file_get_contents($photo);


$decodeDT = json_decode($titi, true);



foreach ($decodeDT as $key => $value) {
$pics[] = $value['download_url'];
}

$limit =10;

if(isset($_GET["limit"]) && $_GET["limit"] <= 10 ){  
$limit = $_GET['limit'] ;

}
else{
    echo "Max Antal APIer är 10";
die;
   
}

$names = [];
for ($i=0; $i < $limit; $i++) { 

    $randArry = rand(0,9);
    $random100 = rand(1,100);
    $unkonwn = rand(1,100);
    
    $products = array("id"=> $unkonwn ,'Product'=>$productName[$randArry],'antal'=>$random100,
    'Price'=>$price[$randArry],'Photo'=> $pics[$randArry]);
     $names[] = $products;
}
 
$json = json_encode($names,
JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;


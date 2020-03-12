<?php


header('Content-Type:  application/json; charset=UTF-8');
$json = file_get_contents('https://opentdb.com/api.php?amount=10&difficulty=easy');

$data = json_decode($json, true);
$data = $data['results'];

// print_r($data);

foreach ($data as $key => $value) {


 print_r($value);


    
 
}

?>
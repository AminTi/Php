<?php

$json = file_get_contents('https://jsonplaceholder.typicode.com/users');


$data = json_decode($json, true);


foreach ($data as $key => $value) {

    "<div>";
    echo 'Name:  '.$value['name']. '<br>';
    echo 'Username:  ' .$value['username']. '<br>';
    echo 'Email:  ' .$value['email'] . '<br>';
    echo 'Street:  '. $value['address']['street'] . '<br>';
    echo 'City:  '.$value['address']['city'] . '<br>';
    echo 'Suite:  '.$value['address']['suite'] . '<br>';
    "</div>";
   echo '<hr>'; 

}




// echo "<pre>";
// print_r($data);
// "</pre>";

?>  


 



<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>GET-Request - Övning</title>
</head>
<body class="container">


<a href="?ID=1">Produkt 1</a>
<a href="?ID=2">Produkt 2</a>

<hr>


<?php 

// if(isset($_GET['ID'])) {
//   echo "Här kommer info om produkt nr ".$_GET['ID'] ;
//   }
//   else{
//   echo "Ingen produkt har valts!"; }
  


// $at = ["age"=>"35","age"=>"37",""=>"43"]


//  foreach ($at as $key => $value) {
//    print_r($value . '<br>');
//  }

// 



$json = file_get_contents('https://jsonplaceholder.typicode.com/users');


$data = json_decode($json, true);

foreach ($data as $key => $value) {
 if($key == $data)
 break;
 "<div>";
 echo $value['name']. $value['username']. '<br>';
 echo $value['email'] . '<br>';
 echo $value['address']['street'] . '<br>';
 echo $value['address']['city'] . '<br>';
 echo $value['address']['suite'] . '<br>';
 "</div>";
echo '<hr>';

}

echo "<pre>";
print_r($data);
"</pre>";


?>

</body>
</html>
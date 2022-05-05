<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$arr = [];

while(count($arr) < 16){
  $numRandom = rand(1, 100);
  if(!in_array($numRandom, $arr)){
    $arr[] = $numRandom;
  } else {
    $arr;
  }
}

var_dump($arr);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>
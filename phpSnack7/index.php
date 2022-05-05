<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$class = [
  [
    'nome' => 'Giorgio',
    'cognome' => 'Vanni',
    'voti' => [7, 8, 7, 9, 6]
  ],
  [
    'nome' => 'Cristina',
    'cognome' => "D'Avena",
    'voti' => [7, 8, 9, 9, 8]
  ],
  [
    'nome' => 'Peter',
    'cognome' => 'Parker',
    'voti' => [8, 8, 9, 9, 8]
  ],
];

function media($voti) {
  $numVoti = count($voti);
  $tot = 0;
  foreach ($voti as $voto) {
    $tot += $voto;
  }
  return $tot/$numVoti;
}

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

  <div>
    <?php for($i = 0; $i < count($class); $i++){ ?>
      <p><?php echo $class[$i]['nome'] . ' ' . $class[$i]['cognome'] . ' - ' . 'Media voti: ' .  media($class[$i]['voti']); ?></p>
    <?php } ?>
  </div>
  
</body>
</html>
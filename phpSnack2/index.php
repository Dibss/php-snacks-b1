<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

  if(!empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['age'])){
    if (strlen($_GET['name']) < 3){
      echo '<h4>Accesso negato</h4>';
      echo '<h4>Il nome deve essere di minimo 3 lettere</h4>';
    } else {
      echo '<h4>Accesso riuscito</h4>';
    }
    // if (!function_exists('str_contains')) {
    //   function str_contains($_GET['mail'], '.'){
    //     return echo '<h4>La mail deve contenere un punto e la @</h4>';
    //   }
    // }
    $age = $_GET['age'];
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

  <form method="GET">
    <div>
      <label for="name">Nome</label>
      <input type="text" name="name" required>
    </div>
    <div>
      <label for="mail">Email</label>
      <input type="email" name="mail" required>
    </div>
    <div>
      <label for="age">Età</label>
      <input type="number" name="age" min="1" max="100" required>
    </div>
    <button type="submit">Invia</button>
  </form>
  
</body>
</html>
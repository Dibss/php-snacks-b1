<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = (!empty($_GET['name'])) ? $_GET['name'] : '';
$mail = (!empty($_GET['mail'])) ? $_GET['mail'] : '';
$age = (!empty($_GET['age'])) ? $_GET['age'] : '';

$validationName = false;
$validationMail = false;
$validationAge = false;

  if (strlen($name) < 3){
    echo '<h4>Il nome deve essere di minimo 3 lettere</h4>';
  } else {
    $validationName = true;
  };

  if ( strpos( $mail, '@' ) == 0 && strpos( $mail, '.' ) == 0){
    echo '<h4>La mail deve contenere almeno una @ e un punto</h4>';
  } else {
    $validationMail = true;
  };

  if ( !is_numeric( $age ) && $age < 0){
    echo "<h4>L'età deve essere un numero e deve essere maggiore di 0</h4>";
  } else {
    $validationAge = true;
  };

  if( $validationName && $validationMail && $validationAge){
    echo '<h4>Accesso riuscito</h4>';
  } else {
    echo '<h4>Accesso negato</h4>';
  };
  
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
      <input type="text" name="age" required>
    </div>
    <button type="submit">Invia</button>
  </form>
  
</body>
</html>
<?php
//funzione per generare una password con caratteri casuali presi da una stringa
function getRandomPassword($length)
{
  //stringa con numeri da 0 a 9, lettere minuscole, lettere maiuscole e simboli
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%*+:@-_|<>';
  //prendo la lunghezza della stringa
  $charactersLength = strlen($characters);
  //sctringa password vuota
  $randomString = '';
  /* basanadomi sul numero scelto dall'utente giro nella stringa dei caratteri 
  e, prendendoli casulamente, li inserisco nella password che volgio generare */
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  //restituisco la password completa
  return $randomString;
}

$length = $_GET['length'] ?? '';

var_dump(getRandomPassword($length));
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Password Generator</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary text-light">
  <header class="text-center mt-5">
    <h1>Random Password Generator</h1>
  </header>
  <main class="container">
    <form class="mx-5" method="GET" action="" novalidate>
      <div class="mb-3">
        <label class="form-label">Numero Caratteri</label>
        <input type="number" name="lenght" class="form-control">
      </div>
      <button type="submit" class="btn btn-light text-secondary">Conferma</button>
      <div class="mt-3">
        <strong>La tua Password è <?= getRandomPassword($length) ?></strong>
      </div>
    </form>
  </main>
</body>

</html>
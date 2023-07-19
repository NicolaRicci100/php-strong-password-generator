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
var_dump(getRandomPassword($length = 15))
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
    <form class="mx-5">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Numero Caratteri</label>
        <input type="number" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-light text-secondary">Conferma</button>
    </form>
  </main>
</body>

</html>
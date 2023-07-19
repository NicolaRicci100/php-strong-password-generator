<?php
session_start();
include  __DIR__ . '/utils/functions.php';
$length = $_SESSION['length'];
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
  <main class="container">
    <div class="mt-3">
      <strong class="d-block">Il numero dei caratteri selezionato è <span class="text-warning"><?= $length ?></span></strong>
      <strong>La tua Password è <span class="text-warning"><?= getRandomPassword($length) ?></span></strong>
    </div>
  </main>
</body>

</html>
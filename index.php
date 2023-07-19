<?php
$length = $_GET['length'] ?? '';
if ($length !== '') {
  session_start();
  $_SESSION['length'] = $length;
  header('Location: password.php');
}
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
        <input type="number" name="length" class="form-control" value="<?= $length ?>">
      </div>
      <button type="submit" class="btn btn-light text-secondary">Conferma</button>
    </form>
  </main>
</body>

</html>
<?php include_once __DIR__ . '/../env.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo $basePath ?>/dist/app.css">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="navbar-brand"> Hotel Booleana</div>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="<?php echo $basePath ?>">Tutte le stanze</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $basePath ?>/create/create.php">Aggiungi una stanza</a></li>
    </ul>
  </nav>

  <div class="container mt-5">
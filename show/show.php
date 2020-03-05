<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/php-hotel-crud/dist/app.css">
  <title>Document</title>
</head>
<body>

  <div class="container">
  <?php include 'server.php';?>
    <h2>Dettaglio stanza</h2>
   <ul>
      <li><?php echo 'Stanza ID: ' . $rooms['id']; ?></li>
      <li><?php echo 'Piano: ' . $rooms['floor']; ?></li>
      <li><?php echo 'Numero di stanza: ' . $rooms['room_number']; ?></li>
      <li><?php echo 'Numero Letti: ' . $rooms['beds']; ?></li>
   </ul>
  </div>
</body>
</html>
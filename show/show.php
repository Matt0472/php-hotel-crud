<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/php-hotel-crud/dist/app.css">
  <title>Document</title>
</head>
<body>
  <?php include 'server.php';?>

  <div class="container">
    <h2>Dettaglio stanza</h2>
   <ul>
    <?php foreach ($rooms as $room) { ?>
      <li><?php echo 'Stanza ID: ' . $room['id']; ?></li>
      <li><?php echo 'Piano: ' . $room['floor']; ?></li>
      <li><?php echo 'Numero di stanza: ' . $room['room_number']; ?></li>
      <li><?php echo 'Numero Letti: ' . $room['beds']; ?></li>
    <?php } ?>
   </ul>
  </div>
</body>
</html>
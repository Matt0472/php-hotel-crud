<?php 
  include 'database.php';

  if (empty($_POST['id'])) {
    die('NO ID');
  }

  $idRoom = $_POST['id'];

  $sql = "DELETE * FROM `stanze` WHERE `id` = `$idRoom`";
  $result = $conn->query($sql);

  if ($result) {
    echo 'CANCELLAZIONE AVVENUTA';
  } else {
    echo 'CANCELLAZIONE NON AVVENUTA';
  }
  $conn->close();
?>


<!-- $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom"; -->
<?php 
  include 'database.php';

  if (empty($_POST['id'])) {
    die('NO ID');
  }

  $idRoom = $_POST['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id` = $idRoom";

  $result = $conn->query($sql);

  if ($result && $result->num_rows == 0) {
    die('NO ID');
  }
  $sql = "DELETE FROM `stanze` WHERE `id` = $idRoom";

  $result = $conn->query($sql);

  if ($result) {
    header("Location: $basePath");
  } else {
    echo 'CANCELLAZIONE NON AVVENUTA';
  }
  $conn->close();
?>



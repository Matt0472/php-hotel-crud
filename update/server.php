<?php
  include __DIR__ . '/../env.php';
  include 'database.php';

  if (empty($_POST['id'])) {
    die('Id non inserito');
  }
  $idRoom = $_POST['id'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];
  $roomNumber = $_POST['room_number'];

  $sql = "SELECT * FROM `stanze` WHERE `id`= $idRoom ";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $rooms =  $result->fetch_assoc();
  }
  else {
    die('ID non esistente');
  }
  
  $sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `beds` = $beds , `floor` = $floor WHERE `id` = $idRoom";
  $result = $conn->query($sql);

  if ($result) {
    header("Location: $basePath/show/show.php?id=$idRoom");
  }
  else {
    echo "KO";
  }
 ?>
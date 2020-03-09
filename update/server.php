<?php
  include __DIR__ . '/../env.php';
  include 'database.php';

  if (empty($_POST['id'])) {
    die('Id non inserito');
  }
  if (empty($_POST['beds'])) {
    die('Id non inserito');
  }
  if (empty($_POST['floor'])) {
    die('Id non inserito');
  }
  if (empty($_POST['room_number'])) {
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
  
  $stmt = $conn->prepare("UPDATE `stanze` SET `room_number` = ?, `beds` = ? , `floor` = ? WHERE `id` = ?");
  $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $idRoom);
  $stmt->execute();
  

  if ($stmt->affected_rows > 0) {
    header("Location: $basePath/show/show.php?id=$idRoom");
  }
  else {
    echo "KO";
  }

  $conn->close();

 ?>
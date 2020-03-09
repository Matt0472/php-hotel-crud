<?php 
  include 'database.php';

  if (empty($_GET['id'])) {
    die('Nessun Id camera');
  }

  $idRoom = $_GET['id'];

  $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
  $stmt->bind_param("i", $idRoom);
  $stmt->execute();
  $result = $stmt->get_result();


  if ($result && $result->num_rows > 0) {
    $rooms = $result->fetch_assoc();
  } elseif ($result) {
    echo "0 results";
  } else {
    echo "query error";
  }
  $conn->close();
?>
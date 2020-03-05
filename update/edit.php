
 <?php
 include 'database.php';
 include __DIR__ . '/../partials/header.php'; 

 if (!empty($_GET['id'])) {
   $idRoom = $_GET['id'];
 }
 $sql = "SELECT * FROM `stanze` WHERE `id`= $idRoom ";
 $result = $conn->query($sql);
 if ($result && $result->num_rows > 0) {
   $rooms =  $result->fetch_assoc();
 }
 else {
   die('ID non esistente');
 }
 ?>

<div class="container">
 <div class="row">
  <div class="col-12 mt-5">
    <form action="server.php" method="POST">
      <div class="form-group">
        <label for="room_number">Numero di stanza</label>
        <input class="form-control" type="text" name="room_number" value="<?php echo $rooms['room_number']; ?>">
      </div>
      <div class="form-group">
        <label for="floor">Piano</label>
        <input class="form-control" type="text" name="floor" value="<?php echo $rooms['floor']; ?>">
      </div>
      <div class="form-group">
        <label for="beds">Letti</label>
        <input class="form-control" type="text" name="beds" value="<?php echo $rooms['beds']; ?>">
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $rooms['id']; ?>">
        <input class="btn btn-info form-control" type="submit" value="Salva">
      </div>
    </form>
  </div>
 </div>
</div>








<?php include __DIR__ . '/../partials/footer.php'; ?>
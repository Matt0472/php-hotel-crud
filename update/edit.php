<?php
 include __DIR__ . '/../partials/header.php'; 
 include 'server.php';
 ?>

<div class="container">
 <div class="row">
  <div class="col-12 mt-5">
    <form action="server.php" method="POST">
      <div class="form-group">
        <label for="room_number">Numero di stanza</label>
        <input type="text" name="room_number" value="">
      </div>
      <div class="form-group">
        <label for="floor">Piano</label>
        <input type="text" name="floor" value="">
      </div>
      <div class="form-group">
        <label for="beds">Letti</label>
        <input type="text" name="beds" value="">
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="">
        <input class="btn btn-info" type="submit" value="Salva">
      </div>
    </form>
  </div>
 </div>
</div>








<?php include __DIR__ . '/../partials/footer.php'; ?>
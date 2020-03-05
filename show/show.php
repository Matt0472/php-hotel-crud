  <?php 
    include 'server.php';
    include __DIR__ . '/../partials/header.php';
  ?>


  <div class="container">
    <div class="row">
     <div class="col-12">
      <div class="card">
        <h1>Numero di stanza: <?php echo $rooms['room_number'] ?></h1>
          <ul>
              <li><?php echo 'ID stanza: ' . $rooms['id']; ?></li>
              <li><?php echo 'Piano: ' . $rooms['floor']; ?></li>
              <li><?php echo 'Numero Letti: ' . $rooms['beds']; ?></li>
              <li><?php echo 'Creato il: ' . $rooms['created_at']; ?></li>
              <li><?php echo 'Aggiornato il:  ' . $rooms['updated_at']; ?></li>
          </ul>
      </div>
     </div>
    </div>
    
  
  <?php __DIR__ . '/../partials/footer.php' ?>
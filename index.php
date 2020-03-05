<?php
  include 'server.php';
  include 'partials/header.php'
?>


    <h1 class="text-center">Tutte le stanze in hotel</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>FLOOR</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!empty($rooms)) {
            foreach ($rooms as $room) { ?>
              <tr>
                <td> <?php echo $room['id']; ?></td>
                <td> <?php echo $room['floor']; ?></td>
                <td><a class="btn btn-primary" href="show/show.php?id=<?php echo $room['id']; ?>" target="_blank">VIEW</a></td>
                <td><a class="btn btn-success" href="#">UPDATE</a></td>
                <td>
                  <form action="delete/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                    <input class="btn btn-danger" type="submit" value="DELETE">
                  </form>
                </td>
              </tr>
        <?php }
          }
        ?>
      </tbody>
    </table>
  
  <?php include 'partials/footer.php'; ?>
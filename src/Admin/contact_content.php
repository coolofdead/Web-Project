<?php 
    require_once("../../src/pdo_connection.php");

    if (count($_GET)) {
      $statement = $connection->prepare("DELETE FROM contact WHERE id=" . $_GET['delete']);
      $statement->execute();
    }

    global $connection;
    $statement = $connection->prepare("SELECT * FROM contact");
    $statement->execute();
    $messages = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
  a, a:hover {
    text-decoration: none;
    color: white;
  }
</style>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Message</th>
    </tr>
  </thead>

  <tbody>

    <?php foreach($messages as $value) { ?>

    <tr>
      <td><?= $value["name"] ?></td>
      <td><?= $value["mail"] ?></td>
      <td><?= $value["message"] ?></td>

      <?php if ($_SESSION["acces"] == 1) { ?>

        <td><button type="button" class="btn btn-danger"><a href="?delete=<?= $value["id"] ?>">Delete</a></button></td>
      
      <?php } ?>
    </tr>

    <?php } ?>

  </tbody>
</table>
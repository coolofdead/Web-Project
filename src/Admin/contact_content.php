<?php 
    require_once("../../src/pdo_connection.php");

    global $connection;
    $statement = $connection->prepare("SELECT * FROM contact");
    $statement->execute();
    $messages = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (count($_GET)) {
        
    }
?>

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
    </tr>

    <?php } ?>

  </tbody>
</table>
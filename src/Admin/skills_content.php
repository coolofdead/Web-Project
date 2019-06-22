<?php 
    require_once("../../src/pdo_connection.php");

    global $connection;
    $statement = $connection->prepare("SELECT * FROM abilities");
    $statement->execute();
    $skills = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (count($_GET)) {
        if (array_key_exists("add", $_GET)) {
            $request = $connection->prepare("
            INSERT INTO abilities (icon, name, experience, percentage, front_color, back_color)
            VALUES('', :name, 0, 0, '', '');
            ");
            $request->bindValue(":name", "skill " . strval(count($skills)));
            $request->execute();
        }

        if (array_key_exists("delete", $_GET)) {
            $request = $connection->prepare("
            DELETE FROM abilities WHERE name='" . $skills[$_GET["delete"]]["name"] . "'
            ");
            $request->execute();
        }

        $statement = $connection->prepare("SELECT * FROM abilities");
        $statement->execute();
        $skills = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    if (count($_POST)) {
        $request = $connection->prepare("
            UPDATE abilities
            SET name='" . $_POST["name"] . 
            "', icon='" . $_POST["icon"] . 
            "', experience='" . $_POST["experience"] . 
            "', percentage='" . $_POST["percentage"] . 
            "', front_color='" . $_POST["front_color"] . 
            "', back_color='" . $_POST["back_color"] . "' 
            WHERE name='" . $_POST["name"] . "'
            ");
        $request->execute();

        $statement = $connection->prepare("SELECT * FROM abilities");
        $statement->execute();
        $skills = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<style>
    a, a:hover {
        text-decoration: none;
        color: white;
    }
</style>

<div class="row">
    <div class="col col-lg-3">
        <ul class="list-group">
            
            <?php foreach($skills as $key => $value) { ?>

                <li class="list-group-item <?= array_key_exists("skill", $_GET) && $_GET["skill"] == $key ? "active" : "";  ?>"><a href="?skill=<?= $key ?>" style="color: black;"><?= $value["name"] ?></a></li>

            <?php } ?>
        </ul>

        <?php if ($_SESSION["acces"] == 1) { ?>
            <div class="d-flex">
                <button type="button" class="btn btn-success w-50 mr-2  mt-2"><a href="?add">Add</a></button>

                <?php if (array_key_exists("skill", $_GET)) { ?>

                    <button type="button" class="btn btn-danger w-50 ml-2  mt-2"><a href="?delete=<?= $_GET["skill"] ?>">Delete</a></button>

                <?php } ?>
            </div>
        <?php } ?>
    </div>
    
    <div class="col">
        <form action="skills.php" method="POST">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>
                            <input 
                                type="text" 
                                class="form-control"
                                name="name"
                                value="<?= array_key_exists("skill", $_GET) ? $skills[$_GET["skill"]]["name"] : ""; ?>" 
                                placeholder="Name" <?= $_SESSION["acces"] == 0 ? "disabled" : "" ?>
                            >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Icon</th>
                        <td>
                            <input 
                                type="text"
                                class="form-control"
                                name="icon"
                                value="<?= array_key_exists("skill", $_GET) ? $skills[$_GET["skill"]]["icon"] : ""; ?>" 
                                placeholder="Path of your icon" <?= $_SESSION["acces"] == 0 ? "disabled" : "" ?>
                            >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Experience</th>
                        <td>
                            <input 
                            type="number" 
                            min="0" 
                            class="form-control" 
                            name="experience"
                            value="<?= array_key_exists("skill", $_GET) ? $skills[$_GET["skill"]]["experience"] : ""; ?>" 
                            placeholder="Year of experience" <?= $_SESSION["acces"] == 0 ? "disabled" : "" ?>
                        >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Percentage</th>
                        <td>
                        <input 
                            type="number" 
                            min="0"
                            max="100" 
                            class="form-control"
                            name="percentage" 
                            value="<?= array_key_exists("skill", $_GET) ? intval($skills[$_GET["skill"]]["percentage"]) : ""; ?>" 
                            placeholder="Percentage of mastering" <?= $_SESSION["acces"] == 0 ? "disabled" : "" ?>
                        >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Font Color</th>
                        <td>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="front_color"
                            value="<?= array_key_exists("skill", $_GET) ? $skills[$_GET["skill"]]["front_color"] : ""; ?>" 
                            placeholder="Font color for progress bar" <?= $_SESSION["acces"] == 0 ? "disabled" : "" ?>
                            >
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Back Color</th>
                        <td>
                            <input 
                            type="text" 
                            class="form-control" 
                            name="back_color"
                            value="<?= array_key_exists("skill", $_GET) ? $skills[$_GET["skill"]]["back_color"] : ""; ?>" 
                            placeholder="Back color for progress bar" <?= $_SESSION["acces"] == 0 ? "disabled" : "" ?>
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php if ($_SESSION["acces"] == 1) { ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-50 mb-4  mt-2">Validate</button>
                </div>
            <?php } ?>
        </div>
    </form>
</div>
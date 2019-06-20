<?php
    $dbInfo = "mysql:host=localhost;dbname=cv;charset=utf8mb4";
    $username = "root";
    $password = "";
    $connection = new PDO($dbInfo, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Project</title>
        <link rel="icon" href="images/pokeball.ico" />
        <style> <?php require_once("css.php"); ?> </style>
        <script> var projectUrls = ["Images/flyday.jpg", "Images/Maze.png", "Images/Pathfinder.png", "Images/flower.jpg"]; </script>
        <script src="./js.js" type="text/javascript" defer></script>
    </head>

    <body>
        <?php
            require_once("../src/summary.php");
        ?>
        
        <div id="Content">
            <img src="Images\work.jpg" class="Background_Image">

            <?php
                require_once("../src/profile.php");
                require_once("../src/about.php");
                require_once("../src/skills.php");
                require_once("../src/services.php");
                require_once("../src/projects.php");
                require_once("../src/contact.php");
            ?>
           
        </div>
    </body>
</html>
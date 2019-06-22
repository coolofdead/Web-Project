<?php 
    require_once("../../src/Admin/user_session_manager.php");

    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }

    function IsActivePage(string $pageName) : string {
        return $pageName == $_SESSION["page"] ? "active" : "";
    }

    if (count($_GET)) {
        if (array_key_exists("disconnect", $_GET)) {
            Logout();
        }
    }
?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><?= $_SESSION["acces"] == 0 ? "User" : "Admin" ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= IsActivePage("skills"); ?>">
                <a class="nav-link" href="skills.php">Skills</a>
            </li>
            <li class="nav-item <?= IsActivePage("contact"); ?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?disconnect">Disconnect</a>
            </li>
        </ul>
    </div>
</nav>
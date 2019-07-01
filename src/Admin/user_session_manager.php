<?php
    // Init session once
    function InitSession() : void {
        session_start();
        
        if (!isset($_SESSION["isLogged"])) {
            session_destroy();
            
            $_SESSION["page"] = "skills";
            $_SESSION["isLogged"] = false;
            $_SESSION["acces"] = 0;
        }
    }

    function Logout() : void {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION["isLogged"] = false;

        header("Location: http://portfolio/admin/index.php");
        exit();
    }
    
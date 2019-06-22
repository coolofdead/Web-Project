<?php
    // Init session once
    function InitSession() : void {
        session_start();

        if (!array_key_exists("isInit", $_SESSION)) {
            $_SESSION["isInit"] = true;
            
            $_SESSION["page"] = "skills";
            $_SESSION["isLogged"] = false;
            $_SESSION["acces"] = 0;
        }
    }

    function Logout() : void {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

        session_destroy();

        header("Location: http://portfolio/admin/index.php");
        exit();
    }
    
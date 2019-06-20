<?php
    // Init session once
    function InitSession() : void {
        session_start();

        if (!array_key_exists("isInit", $_SESSION)) {
            $_SESSION["isInit"] = true;
    
            $_SESSION["isLogged"] = false;
        }
    }

    function Logout() : void {
        $_SESSION["isLogged"] = false;
        header("Location: http://portfolio/admin/index.php");
        exit();
    }
    
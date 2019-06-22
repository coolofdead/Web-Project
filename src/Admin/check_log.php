<?php
    require_once("../../src/pdo_connection.php");

    function Login($mail, $password) : bool {

        if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
            return false;
        }

        global $connection;
        $statement = $connection->prepare("SELECT * FROM admin");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        $isLoged = false;

        foreach($result as $value) {
            if ($value["username"] == $mail && $value["password"] == $password) {
                $isLoged = true;

                session_start();
                $_SESSION["acces"] = $value["acces"];
                break;
            }
        }

        return $isLoged;
    }
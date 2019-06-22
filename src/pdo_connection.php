<?php
    $dbInfo = "mysql:host=localhost;dbname=cv;charset=utf8mb4";
    $username = "root";
    $password = "";
    $connection = new PDO($dbInfo, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
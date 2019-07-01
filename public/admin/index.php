<?php
  require_once("../../src/Admin/user_session_manager.php");
  
  InitSession();
  
  if (!$_SESSION["isLogged"]) {
    header("Location: login.php");
    exit();
  }
  
  header("Location: http://portfolio/admin/skills.php");
  exit();
?>
<?php
    require_once("../src/Classes/User.php");
?>

<div id="Profile">
    <img src="Images\ironman.jpg">  
    <p><?= $user->name ?> <span><?= $user->lastname ?></span></p>
    <h2>I'm <strong class="js-overwrite">Web dev</strong></h2>
</div>
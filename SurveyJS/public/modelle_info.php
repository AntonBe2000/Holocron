<?php
include("header.php"); ?>
    <ul class="topnav">
        <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="40" id="navbar_image"></li>
        <li><a href="index.php">Beratung</a></li>
        <li><a href="factorglossary.php">Faktoren</a></li>
        <li><a class="active" href="modelle_info.php">Preismodelle</a></li>
        <?php if(isset($_SESSION['userid'])) {echo '<li class="right"><a href="logout.php">Logout</a></li>';}?>
    </ul>
    <main>
Diese Seite befindet sich im Aufbau

<?php include ("footer.html");?>
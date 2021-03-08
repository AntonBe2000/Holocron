<?php include("header.php") ?>
<ul class="topnav">
    <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="39" id="navbar_image"></li>
    <li><a class="active" href="index.php">Beratung</a></li>
    <li><a href="factorglossary.php">Faktoren</a></li>
    <li><a href="modelle_info.php">Preismodelle</a></li>
    <?php if(isset($_SESSION['userid'])) {echo '<li class="right"><a href="logout.php">Logout</a></li>';}?>
</ul>



<?php include ("footer.html") ?>

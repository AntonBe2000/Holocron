<?php include("header.php") ?>
<ul class="topnav">
    <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="39" id="navbar_image"></li>
    <li><a class="active" href="index.php">Beratung</a></li>
    <li><a href="factorglossary.php">Faktoren</a></li>
    <li><a href="modelle_info.php">Preismodelle</a></li>
    <?php if(isset($_SESSION['userid'])) {echo '<li class="right"><a href="logout.php">Logout</a></li>';}?>
</ul>

<form name="SurveyIdEingabe" id="SurveyIdEingabe" action="test_auswertung.php" method="get">

    <label for="SurveyIdEingabe">SurveyId</label>
    <input name="textSurveyId" type="text" id="textSurveyId">

    <input name="submit" type="submit" id="submit">

</form>


<?php include ("footer.html") ?>

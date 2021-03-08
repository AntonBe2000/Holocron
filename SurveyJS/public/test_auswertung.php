<?php include("header.php") ?>
    <ul class="topnav">
        <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="39" id="navbar_image"></li>
        <li><a class="active" href="index.php">Beratung</a></li>
        <li><a href="factorglossary.php">Faktoren</a></li>
        <li><a href="modelle_info.php">Preismodelle</a></li>
        <?php if (isset($_SESSION['userid'])) {
            echo '<li class="right"><a href="logout.php">Logout</a></li>';
        } ?>
    </ul>

<?php
function getAnswers($surveyIdentifier) //gibt Antworten aus Datenbank zurück
{
    $query = "SELECT * FROM answers WHERE survey_identifier = :surveyIdentifier";
    $PDO = new PDO("sqlite:" . __DIR__ . "/../resources/sqlite.db");
    $statement = $PDO->prepare($query);
    $statement->bindValue(":surveyIdentifier", $surveyIdentifier);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$textSurveyId = $_GET["textSurveyId"]; //liest das Textfeld aus test.php aus


// echo $textSurveyId; //gibt SurveyId auf Bildschirm aus

$answers = getAnswers("604379f019c8f"); //weist Datenbankergebnisse $answers zu

var_dump($answers); //wirft alle DB-Einträge auf den Bildschirm


include("footer.html"); ?>
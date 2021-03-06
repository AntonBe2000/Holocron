<?php
include("header.php");
include("../configurations/config.php");
define("NAMES", [
    //Kategorie Kunden
    "kunden_wer_ist" => "Hauptkunde:",
    "kunden_welche_art" => "Art:",
    "kunden_wie_viele" => "Anzahl Nutzer",
    "kundensit_bisherige_loesung" => "Bisher eingesetzte Lösung:",
    "kundensit_loesung_aufwaendig" => "Aufwand bisher",
    "kundensit_nutzergruppen" => "Anzahl Nutzergruppen:",
    "kundensit_planungssicherheit" => "Planungssicherheit des Kunden",
    "kundensit_budgetsituation" => "Budgetsituation des Kunden",
    "kundensit_bisherig_geeignet " => "Eignung bisheriger Lösung",

    //Markt
    "markt_entwicklung" => "Marktentwicklung:",
    "markt_eigenrealisierung" => "Aufwand Eigenrealisierung Kunde",
    "markt_vergleichbare_produkte" => "Vergleichbare Produkte am Markt?",
    "markt_preismodell_alt" => "Häufigtes Preismodell am Markt:",
    //Nutzen
    "nutzen_prio_beduerfnisse" => "",
    "nutzen_wie_erfolgt" => "Wie wird das Bedürfnis befriedigt?",

    //Kategorie Kundenrisiko
    "kundensit_hoehe_risiko" => "Geschäftsrisiko Kunde",
    "kundensit_zusammenbrechen_service" => "Geschäftskritischer Service",
    "kundensit_kerngeschaeft_korreliert" => "Korrelation Service mit Kerngeschäft",

    //Kategorie Technik
    "technik_erfassung_moeglich" => "Tracking der Nutzung des Services möglich?",
    "technik_welche_erfassung" => "Wie?",
    "technik_hohe_fixkosten" => "Hohe Fixkosten?"
]);

define("TYPES", [
    "nutzen_prio_beduerfnisse" => "multiple",
    "kundensit_risiko_enable" => "hidden",
    "kundensit_tragen_sie_risiko" => "hidden",
    "kundensit_zahlungsbereitschaft" => "hidden",
    "technik_welche_erfassung" => "multiple",
    "kundensit_hoehe_risiko" => "bar",
    "kundensit_budgetsituation" => "bar",
    "kundensit_planungssicherheit" => "bar",
    "kundensit_kerngeschaeft_korreliert" => "bar",
    "kundensit_loesung_aufwaendig" => "bar",
    "kundensit_zusammenbrechen_service" => "bar",
    "markt_eigenrealisierung" => "bar",
    "technik_hohe_fixkosten " => "bar",
    "nutzen_wie_haeufig" => "hidden",
    "kundensit_bisherig_geeignet " => "bar",
    "kunden_welche_art" => "multiple"
]);

function getAnswers($surveyIdentifier)
{
    $query = "SELECT * FROM answers WHERE survey_identifier = :surveyIdentifier";
    $PDO = new PDO("sqlite:" . __DIR__ . "/../resources/sqlite.db");
    $statement = $PDO->prepare($query);
    $statement->bindValue(":surveyIdentifier", $surveyIdentifier);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoryFromQuestion(string $questionKey)
{
    foreach (QUESTIONS as $category => $questions) {
        if (array_search($questionKey, $questions) !== false) {
            return $category;
        }
    }
    return null;
}

//$answers = getAnswers("604379f019c8f");
$answers = getAnswers($_SESSION["SurveyId"]);

$categories = [];

foreach ($answers as $key => $value) {
    $category = getCategoryFromQuestion($value["question_key"]);

    $categories[$category][] = [
        "category" => $category,
        "type" => TYPES[$value["question_key"]] ?? "default",
        "question" => $value["question_key"],
        "name" => NAMES[$value["question_key"]] ?? $value["question_key"],
        "answer" => $value["answer"]
    ];
}

?>

<ul class="topnav">
    <li><img src="assets/nav_holocron.png" alt="bild" height="36" width="39" id="navbar_image"></li>
    <li><a class="active" href="index.php">Beratung</a></li>
    <li><a href="factorglossary.php">Faktoren</a></li>
    <li><a href="modelle_info.php">Preismodelle</a></li>
    <?php if(isset($_SESSION['userid'])) {echo '<li class="right"><a href="logout.php">Logout</a></li>';}?>
</ul>

<?php

function getCanvasContent(string $category, array $categories)
{
    if( ! isset($categories[$category])) {
        return;
    }
    foreach($categories[$category] as $answer) {

        switch($answer["type"]) {
            case "multiple":
                echo "{$answer["name"]} <ul>";
                foreach (explode("#", $answer["answer"]) as $part) {
                    echo "<li>{$part}</li>";
                }
                echo "</ul>";
                break;
            case "bar":
                echo "{$answer["name"]} ";
                $width = (($answer["answer"] / 5) * 100) . "%";
                echo "<div class='bar-outer'><div class='bar-inner' style='width: {$width}'></div></div>";
                break;
            case "hidden":
                continue 2;
                break;
            default:
                echo $answer["name"] . " " . $answer["answer"];
                break;
        }
        echo "<br>";
    }
}
?>

    <div>
        <table>
            <tr>
                <td>
                    <p>Welches Preismodell soll angezeigt werden?
                    <select name="pricingModelSelect" id="pricingModelSelect" onchange="canvas_generate()">
                        <option value="Transaktionsbasiert">Transaktionsbasiert</option>
                        <option value="ProAsset">Pro Asset basiert</option>
                        <option value="Nutzungspauschale">Nutzungspauschale</option>
                        <option value="TimeMaterial">Time and Material</option>
                        <option value="Volumenbasiert">Volumenbasiert</option>
                        <option value="Inhaltsbasiert">Inhaltsbasiert</option>
                    </select></p>
                </td>
                <td>
                    <?php include("contact_modal.php"); ?>
                </td>
                <td>
                    <button class="button" onclick="CreatePDFfromHTML()">Download als PDF</button>
                </td>
            </tr>
        </table>

    </div>
    <h1>Pricing Model Innovation Canvas</h1>
    <div class="canvas">
        <div class="canvas-column">
            <div class="canvas-cell" style="flex: 1">
                <div class="header">
                    <div class="icon"><img src="assets/unknown.png"/></div>
                    <div class="name">Kunde</div>
                </div>
                <div class="content">
                    <?php getCanvasContent("Kunden", $categories); ?>
                </div>

            </div>
            <div class="canvas-cell" style="flex: 1">
                <div class="header">
                    <div class="icon"><img src="assets/unknown.png"/></div>
                    <div class="name">Kundensituation</div>
                </div>
                <div class="content">
                    <?php getCanvasContent("Kundensituation", $categories); ?>
                </div>

            </div>
        </div>
        <div class="canvas-column">
            <div class="canvas-cell">
                <div class="header">
                    <div class="icon"><img src="assets/unknown.png"/></div>
                    <div class="name">Empfohlenes Preismodell</div>
                </div>
                <div class="content" id="pricingModelDescription">


                </div>

            </div>
        </div>
        <div class="canvas-column">
            <div class="canvas-cell" style="flex: 1">
                <div class="header">
                    <div class="icon"><img src="assets/unknown.png"/></div>
                    <div class="name">Markt</div>
                </div>
                <div class="content">
                    <?php getCanvasContent("Markt", $categories); ?>
                </div>

            </div>
            <div class="canvas-cell" style="flex: 2">
                <div class="header">
                    <div class="icon"><img src="assets/unknown.png"/></div>
                    <div class="name">Nutzen</div>
                </div>
                <div class="content">
                    <?php getCanvasContent("Kundennutzen", $categories); ?>
                </div>

            </div>
            <div class="canvas-cell" style="flex: 1">
                <div class="header">
                    <div class="icon"><img src="assets/unknown.png"/></div>
                    <div class="name">Technische Rahmenbedingungen</div>
                </div>
                <div class="content">
                    <?php getCanvasContent("Technik", $categories); ?>
                </div>

            </div>
        </div>
    </div>
    <div class="clearfix">


<?php include("footer.html"); ?>
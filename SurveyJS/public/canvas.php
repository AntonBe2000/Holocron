<?php
include("header.php");
include("../configurations/config.php");

define("NAMES", [
    "kundensit_risiko_enable" => "YOLO",
    "kundensit_tragen_sie_risiko" => "RISIKO?",
    "kundensit_kerngeschaeft_korreliert" => "Korreliert"
]);

define("TYPES", [
    "nutzen_prio_beduerfnisse" => "multiple",
    "kundensit_budgetsituation" => "bar",
    "kundensit_planungssicherheit" => "bar",
    "kundensit_kerngeschaeft_korreliert" => "bar",
    "kundensit_loesung_aufwaendig" => "bar"
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
    foreach(QUESTIONS as $category => $questions) {
        if(array_search($questionKey, $questions)) {
            return $category;
        }
    }
    return null;
}

$answers = getAnswers("604368a37208c");

$categories = [];

foreach($answers as $key => $value) {
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

$nationality = [
    "german" => "ellipse, black, red, yellow",
    "france" => "ellipse, blue, white, red",
    "italy" => "ellipse, green, white, red",
    "netherlands" => "ellipse, red, white, blue",
    "ivory coast" => "ellipse, green, white, orange",
    "romania" => "ellipse, blue, yellow, red",
    "belgium" => "ellipse, black, yellow, red"
];

function getNationality($nationality) {
    return $nationality[array_rand($nationality, 1)];
}

?>

<style>
    .canvas {
        min-height: 500px;
        width: 1000px;
        display: flex;
        flex-direction: row;
        background: gray;
        border: 2px solid #444;
        margin: 20px auto 0 auto;
        color: #fff;
    }

    .canvas-column {
        flex: 1;
        height: 100%;
        min-height: 500px;
        display: flex;
        flex-direction: column;
    }

    .canvas-cell {
        flex: 1;
        display: flex;
        border: 1px solid #666;
        flex-direction: column;
    }

    .canvas-cell .header {
        display: flex;
        padding: 5px;
        border-bottom: 1px dotted #222;
        height: auto;
    }

    .canvas-cell .header img {
        height: 25px;
        margin-right: 10px;
    }

    .canvas-cell .content {
        padding: 10px;
        flex: 1;
    }

    .canvas-cell .bar-outer {
        width: 100px;
        border: 1px solid #444;
        height: 10px;
    }

    .canvas-cell .bar-inner {
        background: #4caf50;
        height: 10px;
    }
</style>

<?php

function getCanvasContent(string $category, array $categories)
{
    if( ! isset($categories[$category])) {
        return;
    }
    foreach($categories[$category] as $answer) {

        switch($answer["type"]) {
            case "multiple":
                echo "{$answer["name"]}: <ul>";
                foreach(explode("#", $answer["answer"]) as $part) {
                    echo "<li>{$part}</li>";
                }
                echo "</ul>";
                break;
            case "bar":
                echo "{$answer["name"]}: ";
                $width = (($answer["answer"] / 5) * 100) . "%";
                echo "<div class='bar-outer'><div class='bar-inner' style='width: {$width}'></div></div>";
                break;
            default:
                echo $answer["name"] . ": " . $answer["answer"];
                break;
        }
        echo "<br>";
    }
}

?>

<div class="canvas">
    <div class="canvas-column">
        <div class="canvas-cell" style="flex: 1">
            <div class="header" style="background-image: radial-gradient(<?php echo getNationality($nationality); ?>)">
                <div class="icon"><img src="assets/unknown.png" /></div>
                <div class="name">Kunde</div>
            </div>
            <div class="content">
                <?php getCanvasContent("Kunden", $categories); ?>
            </div>

        </div>
        <div class="canvas-cell" style="flex: 1">
            <div class="header" style="background-image: radial-gradient(<?php echo getNationality($nationality); ?>)">
                <div class="icon"><img src="assets/unknown.png" /></div>
                <div class="name">Kundensituation</div>
            </div>
            <div class="content">
                <?php getCanvasContent("Kundensituation", $categories); ?>
            </div>

        </div>
    </div>
    <div class="canvas-column">
        <div class="canvas-cell">
            <div class="header" style="background-image: radial-gradient(<?php echo getNationality($nationality); ?>)">
                <div class="icon"><img src="assets/unknown.png" /></div>
                <div class="name">Empfohlenes Preismodell</div>
            </div>
            <div class="content">
                Preis und Modell
            </div>

        </div>
    </div>
    <div class="canvas-column">
        <div class="canvas-cell" style="flex: 1">
            <div class="header" style="background-image: radial-gradient(<?php echo getNationality($nationality); ?>)">
                <div class="icon"><img src="assets/unknown.png" /></div>
                <div class="name">Markt</div>
            </div>
            <div class="content">
                <?php getCanvasContent("Markt", $categories); ?>
            </div>

        </div>
        <div class="canvas-cell" style="flex: 2">
            <div class="header" style="background-image: radial-gradient(<?php echo getNationality($nationality); ?>)">
                <div class="icon"><img src="assets/unknown.png" /></div>
                <div class="name">Nutzen</div>
            </div>
            <div class="content">
                <?php getCanvasContent("Kundennutzen", $categories); ?>
            </div>

        </div>
        <div class="canvas-cell" style="flex: 1">
            <div class="header" style="background-image: radial-gradient(<?php echo getNationality($nationality); ?>)">
                <div class="icon"><img src="assets/unknown.png" /></div>
                <div class="name">Technische Rahmenbedingungen</div>
            </div>
            <div class="content">
                <?php getCanvasContent("Technik", $categories); ?>
            </div>

        </div>
    </div>
</div>

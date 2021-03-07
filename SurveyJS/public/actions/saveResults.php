<?php

require_once __DIR__ . "/../../configurations/config.php";
require_once __DIR__ . "/../../src/Questions/Question.php";
require_once __DIR__ . "/../../src/FactorObserver.php";
require_once __DIR__ . "/../../src/Preismodell.php";
require_once __DIR__ . "/../../src/Answer.php";

foreach(QUESTIONS as $category => $questions) {
    foreach($questions as $question) {
        $question = ucfirst($question);
        $path = __DIR__ . "/../../src/Questions/{$category}/{$question}.php";
        if(file_exists($path)) {
            require_once $path;
        }
    }
}

$json = json_decode(trim(file_get_contents("php://input")), true);

$surveyIdentifier = uniqid();

$results = $json["results"];

$FactorObserver = new FactorObserver();

foreach($results as $key => $result) {
    $Answer = new Answer($surveyIdentifier, $key, $result, date("Y-m-d H:i:s"));
    $Answer->attach($FactorObserver);
    $Answer->save();
}

$Preismodell = new Preismodell();

session_start();
$_SESSION["SurveyId"] = $surveyIdentifier;



echo json_encode([
    "excluded" => $FactorObserver->getExcluded(),
    "preismodell" => $Preismodell->calculate($FactorObserver->getFactors(),$FactorObserver->getExcluded()),
    "factors" => $FactorObserver->getFactors()
]);
<?php

require_once('../../model/PlayerCharacter.php');

// reading the posted data
$data = file_get_contents('php://input');

// Converting the JSON
$characterData = json_decode($data, true);

// Validate the data
if (!isset($characterData['type'], $characterData['level'], $characterData['life'], $characterData['maxLife'], $characterData['strength'], $characterData['intell'], $characterData['defense'], $characterData['barrier'], $characterData['speed'], $characterData['statsPoints'])) {
    echo json_encode(['status' => 'error', "message" => 'Données manquantes']);
    exit;
}

// Creating the Character object and cleaning data
$type = filter_var($characterData['type'], FILTER_VALIDATE_INT);

$characterToSave = new PlayerCharacter($type);

$characterToSave->setLevel(filter_var($characterData['level'], FILTER_VALIDATE_INT));
$characterToSave->setNextLevelExp($characterToSave->getLevel()*100);
$characterToSave->setLife(filter_var($characterData['life'], FILTER_VALIDATE_INT));
$characterToSave->setMaxLife(filter_var($characterData['maxLife'], FILTER_VALIDATE_INT));
$characterToSave->set(filter_var($characterData['life'], FILTER_VALIDATE_INT));
$characterToSave->setStrength(filter_var($characterData['strength'], FILTER_VALIDATE_INT));
$characterToSave->setIntell(filter_var($characterData['intell'], FILTER_VALIDATE_INT));
$characterToSave->setDefense(filter_var($characterData['defense'], FILTER_VALIDATE_INT));
$characterToSave->setBarrier(filter_var($characterData['barrier'], FILTER_VALIDATE_INT));
$characterToSave->setSpeed(filter_var($characterData['speed'], FILTER_VALIDATE_INT));
$characterToSave->setStatPoints(filter_var($characterData['statsPoints'], FILTER_VALIDATE_INT));
if(isset($characterData['experience'])) {
    $characterToSave->setExperience(filter_var($characterData['experience'], FILTER_VALIDATE_INT));
} else {
    $characterToSave->setExperience(0);
}


// Save the Character in a cookie
//
//


// Return the success message to the JS file
echo json_encode(['status' => 'success']);
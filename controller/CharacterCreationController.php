<?php

if(isset($_GET['type'])) {
    $type = intval($_GET['type']);
    require_once('model/PlayerCharacter.php');
    $player = new PlayerCharacter($type);
    var_dump($player);
} else {
    // If no player type chosen, show the type choice
    require_once('view/CharacterTypeChoice.php');
}
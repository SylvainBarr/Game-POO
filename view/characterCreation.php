<?php

$title = 'Your stats';

ob_start();
?>

<div class="">
    <h1> Class : 
    <?php 
        switch ($player->getType()) {
            case 0:
                echo "Fighter";
                break;
            case 1:
                echo "Mage";
                break;
            case 2:
                echo "Rogue";
                break;
        }

    ?>
    </h1>

    <p>Level : <?=$player->getLevel()?></p>
    <p>Life : <?=$player->getLife()?> / <?=$player->getMaxLife()?></p>
    <p>Strength : <?=$player->getStrength()?></p>
    <p>Intell : <?=$player->getIntell()?></p>
    <p>Defense : <?=$player->getDefense()?></p>
    <p>Barrier : <?=$player->getBarrier()?></p>
    <p>Speed : <?=$player->getSpeed()?></p>
    <p>Experience : <?=$player->getExperience()?> / <?=$player->getNextLevelExp()?></p>
    <br>
    <p>Stats points available : <?=$player->getStatPoints()?></p>
</div>


<?php
$content = ob_get_clean();

require_once('view/template.php');
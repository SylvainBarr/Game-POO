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
    <p>
        <button class="statsChangeButton" data-stat="life" data-value="<?=$player->getMaxLife()?>">-</button>
         Life : <span id="life"><?=$player->getLife()?></span> / <span id="maxLife"><?=$player->getMaxLife()?></span> 
        <button class="statsChangeButton" data-stat="life" data-value="<?=$player->getMaxLife()?>">+</button>
    </p> 
    <p>
        <button class="statsChangeButton" data-stat="strength" data-value="<?=$player->getStrength()?>">-</button>
         Strength : <span id="str"><?=$player->getStrength()?></span>
        <button class="statsChangeButton" data-stat="strength" data-value="<?=$player->getStrength()?>">+</button>
    </p>
    <p>
        <button class="statsChangeButton" data-stat="intell" data-value="<?=$player->getIntell()?>">-</button>
        Intell : <span id="int"><?=$player->getIntell()?></span>
        <button class="statsChangeButton" data-stat="intell" data-value="<?=$player->getIntell()?>">+</button>
    </p>
    <p>
        <button class="statsChangeButton" data-stat="defense" data-value="<?=$player->getDefense()?>">-</button>
        Defense : <span id="def"><?=$player->getDefense()?></span>
        <button class="statsChangeButton" data-stat="defense" data-value="<?=$player->getDefense()?>">+</button>
    </p>
    <p>
        <button class="statsChangeButton" data-stat="barrier" data-value="<?=$player->getBarrier()?>">-</button>
        Barrier : <span id="bar"><?=$player->getBarrier()?></span>
        <button class="statsChangeButton" data-stat="barrier" data-value="<?=$player->getBarrier()?>">+</button>
    </p>
    <p>
        <button class="statsChangeButton" data-stat="speed" data-value="<?=$player->getSpeed()?>">-</button>
        Speed : <span id="spe"><?=$player->getSpeed()?></span>
        <button class="statsChangeButton" data-stat="speed" data-value="<?=$player->getSpeed()?>">+</button>
    </p>
    <p>Experience : <?=$player->getExperience()?> / <?=$player->getNextLevelExp()?></p>
    <br>
    <p>Stats points available : <span id="poi"><?=$player->getStatPoints()?></span></p>
</div>
<div id="saveDiv">
    <button id="saveButton">Save new stats</button>
</div>

<script src="assets/js/characterUpdate.js"></script>

<?php
$content = ob_get_clean();

require_once('view/template.php');
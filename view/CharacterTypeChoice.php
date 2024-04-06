<?php

$title = 'Class choice';

ob_start();
?>

<!-- <div class="container"> -->
    <div class="d-flex justify-content-evenly">
        <a href="?page=create-character&type=0">
            <div class="d-flex card-container">
                <img src="assets/img/fighter.jpg" alt="" class="class-card-img">
                <div class="class-card-text">
                    <h3>Fighter</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores quasi aliquam laboriosam. Eaque, incidunt.</p>
                </div>
            </div>
        </a>
        <a href="?page=create-character&type=1">
            <div class="d-flex card-container">
                <img src="assets/img/mage.jpg" alt="" class="class-card-img">
                <div class="class-card-text">
                    <h3>Mage</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores quasi aliquam laboriosam. Eaque, incidunt.</p>
                </div>
            </div>
        </a>
        <a href="?page=create-character&type=2">
            <div class="d-flex card-container">
                <img src="assets/img/rogue.jpg" alt="" class="class-card-img">
                <div class="class-card-text">
                    <h3>Rogue</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores quasi aliquam laboriosam. Eaque, incidunt.</p>
                </div>
            </div>
        </a>
    </div>
<!-- </div> -->


<?php
$content = ob_get_clean();

require_once('view/template.php');
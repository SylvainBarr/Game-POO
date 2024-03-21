<?php

interface CharacterInterface {

    public function setLevel(int $level) : void;
    public function getLevel() : int;
    
    public function getLife() : int;

    public function getStrength() : int;

    public function getIntell() : int;

    public function getDefense() : int;

    public function getBarrier() : int;

    public function getSpeed() : int;
}


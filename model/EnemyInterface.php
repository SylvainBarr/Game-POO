<?php

interface EnemyInterface {
    
    public function setLife(int $life) : void;
    public function getLife() : int;

    public function setStrength(int $strength) : void;
    public function getStrength() : int;

    public function setIntell(int $intell) : void;
    public function getIntell() : int;

    public function setDefense(int $defense) : void;
    public function getDefense() : int;

    public function setSpeed(int $speed) : void;
    public function getSpeed() : int;
}


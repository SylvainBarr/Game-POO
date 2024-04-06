<?php

require_once('model/CharacterInterface.php');

class Enemy implements CharacterInterface {

    // Properties

    private int $level;
    private int $life;
    private int $strength;
    private int $intell;
    private int $defense;
    private int $barrier;
    private int $speed;
    private int $type; // 0 = fighter, 1 = mage, 2 = rogue/archer


    // Getters and Setters

    /**
     * Get the value of level
     *
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @param int $level
     *
     * @return void
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }
    

    /**
     * Get the value of life
     *
     * @return int
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @param int $life
     *
     * @return void
     */
    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    /**
     * Get the value of strength
     *
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * Set the value of strength
     *
     * @param int $strength
     *
     * @return void
     */
    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * Get the value of intell
     *
     * @return int
     */
    public function getIntell(): int
    {
        return $this->intell;
    }

    /**
     * Set the value of intell
     *
     * @param int $intell
     *
     * @return void
     */
    public function setIntell(int $intell): void
    {
        $this->intell = $intell;
    }

    /**
     * Get the value of defense
     *
     * @return int
     */
    public function getDefense(): int
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @param int $defense
     *
     * @return void
     */
    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

    /**
     * Get the value of barrier
     *
     * @return int
     */
    public function getBarrier(): int
    {
        return $this->barrier;
    }

    /**
     * Set the value of barrier
     *
     * @param int $barrier
     *
     * @return void
     */
    public function setBarrier(int $barrier): void
    {
        $this->barrier = $barrier;
    }

    /**
     * Get the value of speed
     *
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @param int $speed
     *
     * @return void
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }


    /**
     * Get the value of type
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param int $type
     *
     * @return void
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    // Contructor
    
    public function __construct(int $type, int $level)
    {
        if($type == 0){
            $life = intval(100 + ($level * 15));
            $strength = intval(10 + ($level * 2));
            $intell = intval(6 + ($level * 1));
            $defense = intval(10 + ($level * 2));
            $barrier = intval(6 + ($level * 1));
            $speed = intval(6 + ($level * 1));
        } elseif($type == 1) {
            $life = intval(80 + ($level * 8));
            $strength = intval(6 + ($level * 1));
            $intell = intval(10 + ($level * 2));
            $defense = intval(6 + ($level * 1));
            $barrier = intval(10 + ($level * 2));
            $speed = intval(6 + ($level * 1));
        } elseif($type == 2) {
            $life = intval(80 + ($level * 8));
            $strength = intval(10 + ($level * 2));
            $intell = intval(10 + ($level * 2));
            $defense = intval(6 + ($level * 1));
            $barrier = intval(6 + ($level * 1));
            $speed = intval(10 + ($level * 2));
        }
        $this->setLevel($level);
        $this->setLife($life);
        $this->setStrength($strength);
        $this->setIntell($intell);
        $this->setDefense($defense);
        $this->setBarrier($barrier);
        $this->setSpeed($speed);
        $this->setType($type);
    }

    


}
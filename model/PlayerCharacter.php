<?php

require_once('model/CharacterInterface.php');

class PlayerCharacter implements CharacterInterface {

    // Properties

    private int $level;
    private int $life;
    private int $maxLife;
    private int $strength;
    private int $intell;
    private int $defense;
    private int $barrier;
    private int $speed;
    private int $type; // 0 = fighter, 1 = mage, 2 = rogue/archer
    private int $experience;
    private int $nextLevelExp;
    private int $statPoints;


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
     * Get the value of maxlife
     *
     * @return int
     */
    public function getMaxLife(): int
    {
        return $this->maxLife;
    }

    /**
     * Set the value of maxlife
     *
     * @param int $maxlife
     *
     * @return void
     */
    public function setMaxLife(int $maxlife): void
    {
        $this->maxLife = $maxlife;
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

    /**
     * Get the value of experience
     *
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * Set the value of experience
     *
     * @param int $experience
     *
     * @return void
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * Get the value of nextLevelExp
     *
     * @return int
     */
    public function getNextLevelExp(): int
    {
        return $this->nextLevelExp;
    }

    /**
     * Set the value of nextLevelExp
     *
     * @param int $nextLevelExp
     *
     * @return void
     */
    public function setNextLevelExp(int $nextLevelExp): void
    {
        $this->nextLevelExp = $nextLevelExp;
    }

    /**
     * Get the value of statPoints
     *
     * @return int
     */
    public function getStatPoints(): int
    {
        return $this->statPoints;
    }

    /**
     * Set the value of statPoints
     *
     * @param int $statPoints
     *
     * @return void
     */
    public function setStatPoints(int $statPoints): void
    {
        $this->statPoints = $statPoints;
    }


    // Contructor
    
    public function __construct(int $type)
    {
        if($type == 0){
            $life = 100;
            $strength = 10;
            $intell = 6;
            $defense = 10;
            $barrier = 6;
            $speed = 6;
        } elseif($type == 1) {
            $life = 80;
            $strength = 6;
            $intell = 10;
            $defense = 6;
            $barrier = 10;
            $speed = 6;
        } elseif($type == 2) {
            $life = 80;
            $strength = 10;
            $intell = 6;
            $defense = 6;
            $barrier = 6;
            $speed = 10;
        }
        $this->setLevel(1);
        $this->setLife($life);
        $this->setMaxLife($life);
        $this->setStrength($strength);
        $this->setIntell($intell);
        $this->setDefense($defense);
        $this->setBarrier($barrier);
        $this->setSpeed($speed);
        $this->setType($type);
        $this->setExperience(0);
        $this->setNextLevelExp(100);
        $this->setStatPoints(10);
    }

    



    

    
}
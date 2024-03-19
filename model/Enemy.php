<?php

require_once('model/EnemyInterface.php');

class Enemy implements EnemyInterface {

    // Properties

    private int $life;
    private int $strength;
    private int $intell;
    private int $defense;
    private int $speed;


    // Getters and Setters
    

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


    // Contructor
    
    public function __construct(int $life, int $strength, int $intell, int $defense, int $speed)
    {
        $this->setLife($life);
        $this->setStrength($strength);
        $this->setIntell($intell);
        $this->setDefense($defense);
        $this->setSpeed($speed);
    }
}
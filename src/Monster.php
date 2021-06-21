<?php


namespace App;


class Monster
{
    private int $power;
    private int $damage;

    public function __construct($rare)
    {
        switch ($rare) {
            case 'bronze':
                $this->power = rand(10, 20);
                $this->damage = rand(15, 25);
                break;
            case 'silver':
                $this->power = rand(20, 30);
                $this->damage = rand(25, 35);
                break;
            case 'gold':
                $this->power = rand(30, 40);
                $this->damage = rand(35, 45);
                break;
        }
    }

    /**
     * @return int
     */
    public function get(): int
    {
        while ($this->power >= $this->damage) {
            $this->power = $this->power - $this->damage;
        }
        return $this->power;
    }
}

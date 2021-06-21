<?php


namespace App;


class Chest
{
    private int $point = 0;

    /**
     * @return int
     */

    public function __construct($rare)
    {
        switch ($rare) {
            case "bronze":
                $this->point = rand(3, 9);
                break;
            case "silver":
                $this->point = rand(10, 18);
                break;
            case "gold":
                $this->point = rand(19, 27);
        }
        return $this->point;
    }

    public function get(): int
    {
        return $this->point;
    }
}

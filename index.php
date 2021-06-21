<?php


use App\Chest;
use App\Monster;
use App\Player;

require "vendor/autoload.php";

$player = new Player();

$chest = new Chest("bronze");

$monster = new Monster('gold');

$player->doIt($chest);

$player->doIt($monster);

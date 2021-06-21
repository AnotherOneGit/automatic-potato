<?php


namespace App;

class Player
{
    /**
     * @var mixed
     */
    private $score;

    public function __construct()
    {
        echo "Player is done\n";
    }

    public function doIt($data = null)
    {
        $res = file_get_contents('src/score.json');
        $res = json_decode($res, true);
        $this->score = $res[0]['score'];
        $res[0]['score'] += $data->get();
        $jsonData = json_encode($res);
        file_put_contents('src/score.json', $jsonData);
    }
}
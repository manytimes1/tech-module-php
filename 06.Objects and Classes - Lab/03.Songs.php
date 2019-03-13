<?php

class Song
{
    private $typeSong;
    private $name;
    private $time;

    public function __construct($typeSong, $name, $time)
    {
        $this->typeSong = $typeSong;
        $this->name = $name;
        $this->time = $time;
    }

    public function getTypeSong()
    {
        return $this->typeSong;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTime()
    {
        return $this->time;
    }
}

$songs = intval(readline());
$arraySongs = [];

for ($i = 0; $i < $songs; $i++) {
    $data = explode("_", readline());
    $song = new Song($data[0], $data[1], $data[2]);
    array_push($arraySongs, $song);
}
$typeList = readline();
/* @var Song $arraySong */

if ($typeList == "all") {
    foreach ($arraySongs as $arraySong) {
        echo $arraySong->getName() . PHP_EOL;
    }
} else {
    foreach ($arraySongs as $arraySong) {
        if ($arraySong->getTypeSong() == $typeList) {
            echo $arraySong->getName() . PHP_EOL;
        }
    }
}

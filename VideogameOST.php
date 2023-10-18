<?php

declare(strict_types=1);

class VideogameOST
{
    public int $ID;
    public string $name;
    public string $videoGameName;
    public int $releaseYear;
    public $trackList;

    function __construct(int $ID, string $name, string $videoGameName, int $releaseYear, $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }
}

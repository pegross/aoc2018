<?php

abstract class Parser
{
    private function __construct()
    {
        return;
    }

    /**
     * Read the input for given day from inputs/ folder and return it.
     * @param int $day
     * @return string
     */
    static function getInput(int $day): string
    {
        return file_get_contents("./inputs/input{$day}.txt");
    }

}

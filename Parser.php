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
        return file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "inputs"
                . DIRECTORY_SEPARATOR . "{$day}.txt");
    }


    /**
     * Return the input as an array, split by newline. Removes empty lines.
     * @param int $day
     * @return array
     */
    static function getInputArray(int $day) : array
    {
        return array_filter(explode("\n", Parser::getInput($day)), function ($value) {
            return $value !== '';
        });
    }
}

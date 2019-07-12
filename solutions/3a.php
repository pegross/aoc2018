<?php

require_once '../Parser.php';

$lines = Parser::getInputArray(3);
$fabric = [];

foreach ($lines as $line) {
    $start = getLineStart($line);
    $size = getLineSize($line);

    for ($x = $start[0]; $x < ($start[0] + $size[0]); $x++) {

        for ($y = $start[1]; $y < ($start[1] + $size[1]); $y++) {
            $key = "{$x},{$y}";
            // If key occurred before, get it's value, else 0
            $val = key_exists($key, $fabric) ? $fabric[$key] : 0;
            $fabric[$key] = $val + 1;
        }

    }
}

echo array_reduce($fabric, function ($overlaps, $occurrences) {
    return ($occurrences > 1) ? $overlaps + 1 : $overlaps;
}, 0);


/**
 * Gets the starting positions of a given line.
 * @param string $line
 * @return array [x,y]
 */
function getLineStart(string $line): array
{
    preg_match("/([0-9]*),([0-9]*)/", $line, $matches);
    return [$matches[1], $matches[2]];
}

/**
 * Gets the size (width, height) of a given line.
 * @param string $line
 * @return array [w,h]
 */
function getLineSize(string $line): array
{
    preg_match("/([0-9]*)x([0-9]*)/", $line, $matches);
    return [$matches[1], $matches[2]];
}

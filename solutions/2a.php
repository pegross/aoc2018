<?php

/** https://adventofcode.com/2018/day/2 */

require_once '../Parser.php';

$lines = Parser::getInputArray(2);
$threes = 0;
$twos = 0;

foreach ($lines as $line) {

    $lineChars = str_split($line);
    $containsThrice = false;
    $containsTwice = false;

    foreach ($lineChars as $char) {
        $occurences = substr_count($line, $char);
        $occurences == 3 ? $containsThrice = true : null;
        $occurences == 2 ? $containsTwice = true : null;
    }

    $containsThrice ? $threes++ : null;
    $containsTwice ? $twos++ : null;
}

echo ($threes * $twos) . PHP_EOL;
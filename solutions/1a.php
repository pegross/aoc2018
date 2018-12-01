<?php

/** @link https://adventofcode.com/2018/day/1 */

require_once '../Parser.php';

$arr = array_filter(explode("\n", Parser::getInput(1)), function ($value) {
    return $value !== '';
});
$result = 0;

foreach ($arr as $item) {
    $result += intval($item);
}

echo $result . PHP_EOL;
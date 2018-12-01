<?php

/** https://adventofcode.com/2018/day/1#part2 */

require_once '../Parser.php';

$arr = array_filter(explode("\n", Parser::getInput(1)), function ($value) {
    return $value !== '';
});

$result = 0;
$reached = [0];

while (true) {
    foreach ($arr as $item) {
        $result += intval($item);
        if (in_array($result, $reached)) {
            echo $result . PHP_EOL;
            break 2;
        } else {
            array_push($reached, $result);
        }
    }
}

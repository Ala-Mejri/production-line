<?php


var_dump(twoSum([3, 1, 4, 5, 2], 67));
die();

function twoSum(array $nums, int $target): array
{
    $loopLength = count($nums) - 1;

    for ($i = 0; $i < $loopLength; $i++) {
        for ($j = ($i + 1); $j < count($nums); $j++) {
            if (($nums[$i] + $nums[$j]) === $target) {
                return [$i, $j];
            }
        }
    }

    return [];
}

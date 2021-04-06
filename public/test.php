<?php

$time= strtotime('09:00');
$startTime = date('H:i', strtotime('-30 minutes', $time));
var_dump($time);
var_dump($startTime);
die();

$interviewDuration = 30;
$adamAvailability = ['09:00', '20:00'];
$maxAvailability = ['10:00', '18:30'];

$adamAndMaxAvailability = getAvailability($adamAvailability, $maxAvailability);

var_dump($adamAndMaxAvailability);

foreach ($adamAndMaxAvailability as $value) {

}

function getAvailability(array $array1, array $array2): array
{
    #ToDo
    // check if the array index isset

    $start = [
        convertDateStringToInteger($array1[0]),
        convertDateStringToInteger($array2[0]),
    ];

    $end = [
        convertDateStringToInteger($array1[1]),
        convertDateStringToInteger($array2[1]),
    ];

    $min = min($end);
    $max = max($start);

    return [
        $max,
        $min
    ];
}

function convertDateStringToInteger(string $date): int
{
    return (int)str_replace(':', '', $date);
}

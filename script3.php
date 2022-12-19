<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$result = array_map(function($num) {
    if ($num % 2 == 0) {
        return 'even';
    } else {
        return 'odd';
    }
}, $numbers);

print_r($result);

function getStats(array $numbers): array
{
    $max = max($numbers);
    $min = min($numbers);
    $avg = array_sum($numbers) / count($numbers);
    return [
        'max' => $max,
        'min' => $min,
        'avg' => $avg
    ];
}

$stats = getStats($numbers);

print_r($stats);
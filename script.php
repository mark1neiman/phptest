<?php

$name = readline("Hello, what is your name?\n");

$task1 = readline("What is your first task today?\n");
$task1Time = readline("How much time do you need to complete this task?\n");

$task2 = readline("What is your second task today?\n");
$task2Time = readline("How much time do you need to complete this task?\n");

$task3 = readline("What is your third task today?\n");
$task3Time = readline("How much time do you need to complete this task?\n");

$sumTime = $task1Time + $task2Time + $task3Time;

echo "$name, today you have 3 priority tasks scheduled for the day:\n
- $task1 ($task1Time h)\n
- $task2 ($task2Time h)\n
- $task3 ($task3Time h)\n
Estimated time to complete the plan = $sumTime h";
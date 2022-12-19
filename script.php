<?php

$name = readline("Hello, what is your name?\n");
$tasks = (int)readline("How many tasks do you have today?\n");

$result = '';
$sumtine = 0;
for ($i = 1; $i <= $tasks; $i+=1) {
    $str = readline("Enter your tasks\n");
    $time = readline("Enter time needed\n");
    $result .= "$str | $time h\n";
    $sumtine += $time;
    }
echo "$name, your tasks are:\n$result\ntime needee $sumtine h\n";

// $task1 = readline("What is your first task today?\n");
// $task1Time = readline("How much time do you need to complete this task?\n");

// $task2 = readline("What is your second task today?\n");
// $task2Time = readline("How much time do you need to complete this task?\n");

// $task3 = readline("What is your third task today?\n");
// $task3Time = readline("How much time do you need to complete this task?\n");

// $sumTime = $task1Time + $task2Time + $task3Time;

// echo "$name, today you have 3 priority tasks scheduled for the day:\n
// - $task1 ($task1Time h)\n
// - $task2 ($task2Time h)\n
// - $task3 ($task3Time h)\n
// Estimated time to complete the plan = $sumTime h";



placeToReturn:
$question = (int)readline("When apollo 11 landed on moon? 1969 1959 1973 | ");

while (true){ 
    
if ($question == 1969) {
    echo 'good job!';
    break;
} elseif ($question == 1959) {
    echo "Answer is not correct\n";
    break;
} elseif ($question == 1973)  {
    echo "Answer is not correct\n";
    break;
} else {
    echo "Try again\n";
    goto placeToReturn;
}
}


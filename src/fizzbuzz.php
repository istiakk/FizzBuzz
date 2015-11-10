<?php

/** You don't need to change this code: */
// Read max value
if (isset($argv[1])) {
    $max = $argv[1];
} else {
    echo "Usage: php {$argv[0]} <max> <rule1,rule2>\n";
    die();
}
// Read rules
if (!isset($argv[2])) {
    //default to fizz if no rules are supplied
    $rules = ['fizz'];
} else {
    //store all rules as strings in the rules array
    $rules = explode(',', $argv[2]);
}

/**
 * Here you should add your own implementation 
 *
 * @var int      $max   the maximum number that fizzbuzz should show
 * @var string[] $rules array with the rules as strings
 */
function FizzBuzz($iterations = 20) {
    for ($i = 1; $i <= $iterations; $i++) {
        if (( $i % 3 ) == 0 && ( $i % 5 ) == 0) {
            echo 'FizzBuzz';
        } else if (( $i % 5 ) == 0) {
            echo 'Buzz';
        } else if (( $i % 3 ) == 0) {
            echo 'Fizz';
        } else {
            echo $i;
        }

        echo PHP_EOL;
    }
}

if (PHP_SAPI == 'cli') {
    $iterations = 20;

    if (isset($_SERVER['argc']) && $_SERVER['argc'] > 1 && intval($_SERVER['argv'][1]) > 0) {
        $iterations = intval($_SERVER['argv'][1]);
    }

    FizzBuzz($iterations);
} else {
    echo '<pre>';

    $iterations = 20;

    if (isset($_REQUEST['iterations']) && intval($_REQUEST['iterations']) > 0) {
        $iterations = intval($_REQUEST['iterations']);
    }

    FizzBuzz($iterations);
}
<?php

// $num = 54; // Nâo Pertence
$num = 55; // Pertence
$fib1 = 0;
$fib2 = 1;

if ($num == $fib1 || $num == $fib2) {
    echo "O número pertence à sequência de Fibonacci.";
} else {
    while ($fib2 < $num) {
        $temp = $fib2;
        $fib2 = $fib1 + $fib2;
        $fib1 = $temp;
        if ($num == $fib2) {
            echo "O número pertence à sequência de Fibonacci.";
            break;
        }
    }
    if ($num != $fib2) {
        echo "O número não pertence à sequência de Fibonacci.";
    }
}

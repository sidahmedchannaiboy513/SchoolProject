<?php

// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return mt_rand(1, 10);
}

// Function to calculate the sum of two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Function to calculate the difference of two numbers
function subtract($num1, $num2) {
    return $num1 - $num2;
}

// Function to calculate the product of two numbers
function multiply($num1, $num2) {
    return $num1 * $num2;
}

// Function to calculate the quotient of two numbers
function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Cannot divide by zero!";
    } else {
        return $num1 / $num2;
    }
}

// Function to calculate the remainder of two numbers
function mod($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Cannot divide by zero!";
    } else {
        return $num1 % $num2;
    }
}

?>
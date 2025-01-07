<?php
/**
 * Copying integers array to the new array
 * and adding new integers to it
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

$originalNumbers = [1, 2, 3, 4, 5, 6, 7];
$allNumbers = [...$originalNumbers, 8, 9]; // PHP 7.4 syntax
print_r($allNumbers); // [1, 2, 3, 4, 5, 6, 7, 8, 9]

<?php
/**
 * Demonstrating destructuring of the single-dimension array
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Single dimension array
$superheroes = [
    'name' => 'Tony',
    'surname' => 'Stark',
    'role' => 'Iron Man'
];

[
    'name' => $name,
    'surname' => $surname,
    'role' => $role
] = $superheroes + [ 'role' => 'Unknown' ]; // PHP 7.4 syntax

var_dump($name, $surname, $role);

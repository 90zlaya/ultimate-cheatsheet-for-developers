<?php
/**
 * Demonstration of the map method
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

$superheroes = [
    [
        'name' => 'Tony',
        'surname' => 'Stark',
        'role' => 'Iron Man'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'role' => 'Spiderman'
    ],
    [
        'name' => 'Natasha',
        'surname' => 'Romanoff',
        'role' => 'Black Widow'
    ]
];

$superheroRoles = array_map(
    fn ($superhero) => $superhero['role'], $superheroes
); // PHP 7.4 syntax

var_dump($superheroRoles);

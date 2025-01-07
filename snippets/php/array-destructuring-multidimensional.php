<?php
/**
 * Demonstrating destructuring of the multi-dimension array
 * 
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 * @since 2021-02-26
 */

// Multidimensional array
$superheroes = [
    'male' => [
        [
            'name' => 'Tony',
            'surname' => 'Stark',
            'role' => 'Iron Man'
        ],
        [
            'name' => 'Peter',
            'surname' => 'Parker',
            'role' => 'Spiderman'
        ]
    ],
    'female' => [
        [
            'name' => 'Natasha',
            'surname' => 'Romanoff',
            'role' => 'Black Widow'
        ]
    ]
];

[
    'male' => $male,
    'female' => $female
] = $superheroes; // PHP 7.4 syntax

var_dump($male, $female);

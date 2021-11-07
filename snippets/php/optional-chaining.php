<?php
/**
 * Checking what's going to happen when
 * optional chaining is used on example object
 * 
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 * @since 2021-11-07
 */

class Rider
{
    public $firstName;
    public $lastName;

    public function __construct($firstName = '', $lastName = '') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function present() {
        return 'My name is '
            . $this->firstName
            . ' '
            . $this->lastName;
    }
};

$rider = new Rider('Valentino', 'Rossi');

echo $rider?->firstName; // PHP 8.0 syntax
echo PHP_EOL;

echo $rider?->lastName; // PHP 8.0 syntax
echo PHP_EOL;

echo $rider?->present(); // PHP 8.0 syntax
echo PHP_EOL;

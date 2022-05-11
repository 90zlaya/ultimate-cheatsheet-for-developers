<?php
/**
 * Checking what will be result when
 * casting string with different values
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Example for string 'true'
echo 'Expected 1 got ';
echo (bool) 'true';
echo PHP_EOL;

// Example for string 'false'
echo 'Expected 0 got ';
echo (bool) 'false';
echo PHP_EOL;

// Example for string '0'
echo 'Expected 0 or nothing got ';
echo (bool) '0';
echo PHP_EOL;

// Example for string '1'
echo 'Expected 1 got ';
echo (bool) '1';
echo PHP_EOL;

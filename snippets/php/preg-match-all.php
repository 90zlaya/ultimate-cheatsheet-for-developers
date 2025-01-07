<?php
/**
 * Checking what will be result when
 * extracting tags from string
 * 
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 * @since 2021-10-12
 */

/**
 * String which contains text and image tags
 * 
 * @var string
 */
$string = 'hey how are you <img src="example.com/image.png"> test test <IMG src="example.com/image2.png">';

// Perform a global regular expression match for image tags
preg_match_all('/(<img .*?>)/i', $string, $imageTags);
// Display multidimensional array from string match rule
print_r($imageTags);

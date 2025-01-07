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

/**
 * Perform a global regular expression match for image tags
 * and display 1 or 0 from string match rule
 * which represents if string contains image tag or not
 */
print_r(preg_match('/(<img .*?>)/i', $string));
echo PHP_EOL;

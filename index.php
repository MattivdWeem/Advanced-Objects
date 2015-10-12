<?php
/**
 * Example document, just for development.
 * Me testing all the functions in a simple bootstrapping file :)
 */

/**
 *  Use the class depends.
 */
use MattivdWeem\AdvancedObjects\Types\String;

/**
 * Require the composer autoloader
 */
require_once('vendor/autoload.php');

/**
 * Simple println function for the terminal
 * @param $a
 */
function println($a){
    echo $a."\n";
}

/**
 * Initiate a new \String object
 */
$x = new String('_the quick brown fox jumps over the lazy dog^');

/**
 * Manipulate the String object
 */
$x
    ->pop()
    ->shift()
    ->replace('fox','cow')
    ->replace('dog','fox')
    ->add(' | ')
    ->trim('fox')
    ->ltrim('the')
    ->rtrim(' | ')
    ->attach('-> ');

// obtain the length of the string and print it behind the string
println($x .'['.$x->length().']');

// add a String to the end of the string
$x->add(new String('This is my new string'));
println($x);

$y = new String('abc');
println($y);

$y->rtrim('c');
println($y);

$y->ltrim('a');
println($y);

$y->trim('b');
println($y);

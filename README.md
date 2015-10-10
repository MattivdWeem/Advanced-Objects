# Advanced Objects

Simple object manipulation using strict rules, each object will be handled strict. and has a couple of extra usefull functions.

## Strings
    <?php

    use MattivdWeem\AdvancedObjects\Types\String;

    require_once('vendor/autoload.php');

    $myString = new String('This is my awesome string');
    $myString->shuffle()->sort();
    echo $myString;

This example will create a string, the string will be shuffled and sorted (yes very useful, i know).

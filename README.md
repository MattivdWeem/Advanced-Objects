# Advanced Objects

Simple object manipulation using strict rules, each object will be handled strict. and has a couple of extra usefull functions.

## Why?
Strictly typed languages have great advantages for multi disciplined teams.
With a simple class creation your objects will be on steroids. `$a = 'just a string'` `$a = new String('just a string on steroids');`

.. some text around why, what and more information

## installation

.. installation notes here

## simple example here

## types
There are multiple types defined, ... information about types here

### Strings
    <?php

    use MattivdWeem\AdvancedObjects\Types\String;

    require_once('vendor/autoload.php');

    $myString = new String('This is my awesome string');
    $myString->shuffle()->sort();
    echo $myString;

This example will create a string, the string will be shuffled and sorted (yes very useful, i know).



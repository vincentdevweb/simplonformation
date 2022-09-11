<?php

error_reporting(E_ERROR | E_PARSE); //CACHE LES WARNINGS 
$array = array();

$str = fopen('article.txt', 'r');

while (!feof($str)) {
    $c = fgetc($str);
    if (($c == ' ') || ($c == "'") || ($c == '.') || ($c == ',')) {
        ++$array[$mot];
        $mot = '';
    } else {
        $mot = $mot . $c;
    }
}

//explode()

print_r($array);

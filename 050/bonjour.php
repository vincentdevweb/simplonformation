<?php


error_reporting(E_ERROR | E_PARSE);
$array = array();
$i = 0;

$str = fopen('article.txt', 'r');


while (!feof($str)) {
    $c = fgetc($str);
    if (($c == ' ') || ($c == "'") || ($c == '.') || ($c == ',')) {
        $array[$i] = $mot;
        $i++;
        $mot = '';
    } else {
        $mot = $mot . $c;
    }

    // ... do something with $c
    //echo ftell($str), ",";
    //echo $a;
}
$tab = array();
foreach ($array as $cle) {
    ++$tab[$cle];
}

print_r($tab);
//print_r(array_count_values($array));


// $b = array ( 
//     fopen('article.txt','r')
// )

// $i = 1;
// while($i <= (substr_count($str,' ')):
// echo 'Premier appel : ' .fgets($str, 30). '<br>';
// $i++;
// endwhile;

//echo fread($str, filesize('article.txt'));

// $i = 1;
// while ($i <= filesize('article.txt') ):
//     echo $i;
//     $i++;
// endwhile;

//echo substr_count($str, filesize('article.txt'));
//filesize('article.txt')

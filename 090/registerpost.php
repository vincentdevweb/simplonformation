<?php

include('./connection.php');
include('./conx.php');//mettre mdp et user dans le fichier conx

use PALLAS\Post\Post;

$saisie =  $_POST;
//$saisie['date_post'] = time();

$newpost = new Post($conf);
$newpost->inserer('post', $saisie);

// $saisie_keys =  array_keys($_POST) ;
// $saisie_value =  array_values($_POST) ;

//print_r($saisie);
header('Location: listarticle.php');

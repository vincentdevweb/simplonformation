<?php 

include('./connection.php');
include('./conx.php'); //mettre mdp et user dans le fichier conx

use PALLAS\Post\Post;

$content = $_GET['search'];
//print_r($content);

$updatepost = new Post($conf);
$requete = "SELECT * FROM post WHERE title='" . $content."'";
$res = $updatepost->requete($requete, 'fetch');
//print_r($res);
header('Location: detail.php?idpost='.$res['id']);


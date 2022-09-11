<?php

include('./connection.php');
include('./conx.php'); //mettre mdp et user dans le fichier conx

use PALLAS\Post\Post;

$updatepost = new Post($conf);

$updatepost->delete('post','4');
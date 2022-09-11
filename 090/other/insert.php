<?php

require 'App/Models/Post.php';
include('App/Utils/dBug/dBug.php');
include('conx.php');
require('/../conx/conx.php');

use PALLAS\App\Models\Post;
use PALLAS\Database\Cx;
use SYRADEV\Dbg\dBug;

$newPost = new Post;

$newPost-> id = '?';
$newPost-> blog_id = 2;
$newPost-> titre = 'WTC 38 enfin disponible sur youtube';
$newPost-> date_post = time();
$newPost-> auteur_id ='77';
$newPost-> contenu = 'Lorem ipsum dolor sit amet';

$newuser = new User;

$dbh = new Cx($conf);

 $dbh->inserer('post', $newPost);
 new dBug($newPost);


//new dBug($dbh->requete($testnewpost));

//new dBug($newPost);

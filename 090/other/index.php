<?php

use SYRADEV\Dbg\dBug;
use PALLAS\Database\Cx;

require('/../conx/conx.php');
include('App/Utils/dBug/dBug.php');
include('conx.php');

// echo '<pre>';
// var_dump($conf);
// echo '</pre>';

$req0 = 'SELECT COUNT(*) AS nbposts FROM `post` WHERE `blog_id`=2';

$test = new Cx($conf);

new dBug($test->requete($req0,'fetch'));

$requete = 'SELECT p.id,p.titre AS postitle, b.titre AS blogtitle, u.firstname, u.lastname FROM `post` p 
INNER JOIN `blog` b ON p.blog_id = b.id
INNER JOIN `user` u ON p.auteur_id = u.id 
WHERE `blog_id`=2';

new dBug($test->requete($requete));

?>



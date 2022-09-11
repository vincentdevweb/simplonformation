<?php

include('./connection.php');
include('./conx.php'); //mettre mdp et user dans le fichier conx

use PALLAS\Post\Post;

$updatepost = new Post($conf);
$requete = "SELECT * FROM post";
$res = $updatepost->requete($requete);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach ($res as $res_array) {
    foreach ($res_array as $key => $value) {
        if ($key == 'id') {
            echo "<a href='detail.php?idpost=".$value."'>AJOUTER un commentaire</a><br>";
        } else {
            echo $key . '=' . $value . ' /    / ';
        }
    }
    echo  '<hr/>';
}
?>

<?php
// $timestamp=1333699439;
// echo gmdate("Y-m-d\TH:i:s\Z", $timestamp);
?>

    
</body>
</html>



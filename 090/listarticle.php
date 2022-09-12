<?php

include('./connection.php');
include('./conx.php'); //mettre mdp et user dans le fichier conx

use PALLAS\Post\Post;

$updatepost = new Post($conf);
$requete = "SELECT * FROM post";
$res = $updatepost->requete($requete);

// echo '<pre>';
// print_r($res);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<?php include('./header.php'); ?>
    <div class="list-group">
        <?php
        foreach ($res as $res_array) {
            foreach ($res_array as $key => $value) {
                extract($res_array);
                $href = "<a href='detail.php?idpost=" . $id . "' class='list-group-item list-group-item-action''>" . $title . "</a>";
            }
            echo $href;
        }
        // $timestamp=1333699439;
        // echo gmdate("Y-m-d\TH:i:s\Z", $timestamp);
        ?>
    </div>
    <?php include('./footer.php'); ?>
</body>
<script src="./js/bootstrap.min.js"></script>

</html>
<?php
//print_r($_GET);
$id_post = $_GET['idpost'];
//print_r($id_post);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form method="post" action="registercomment.php">
        <label for="content">COMMENT</label>
        <textarea id="content" name="content" type="text" required="required"></textarea>
        <input type="hidden" value="1" name="author">
        <input type="hidden" value='<?php echo time(); ?>' name="date_comment">
        <input type="hidden" value='<?php echo $id_post;?>' name="post_id">
        <button type="submit" value="Valider"> Valider le formulaire</button>
    </form>
</body>

</html>
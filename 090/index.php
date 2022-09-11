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
    <form method="post" action="registerpost.php">
        <label for="title">TITRE</label>
        <input id="title" name="title" type="text" required="required">
        <label for="content">DESCRIPTION</label>
        <textarea id="content" name="content" type="text" required="required"></textarea>
        <input type="hidden" value="1" name="author">
        <input type="hidden" value="1" name="blog_id">
        <input type="hidden" value='<?php echo time(); ?>' name="date_post">
        <button type="submit" value="Valider"> Valider le formulaire</button>
    </form>
</body>

</html>
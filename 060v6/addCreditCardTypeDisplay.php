<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<?php require 'dictionnary.php'; ?>
<?php require './contact/setDisplay.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $dictionnary['register.page.title'] ?></title>
</head>

<body>
    <?php require 'header.php'; ?>
    <div class="card text-center">
        <div>
            <h2>
                <h2>ADD CREDIT CARD TYPE</h2>
            </h2>
            <form method="post" action="addCreditCardType.php" enctype="multipart/form-data">
                <?php
                foreach ($CB_ADD_Types as $IType) {
                    echo "<div><label for='" . $IType['for'] . "'>" . $IType['label'] . "</label><input required='required' type='" . $IType['type'] . "' id='" . $IType['for'] . "' name='" . $IType['for'] . "'></div>";
                }
                ?>
                <div class="form-example"><input type="submit" value="<?= $dictionnary['bouton'] ?>"></div>
            </form>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>
<?php

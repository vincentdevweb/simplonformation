<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<?php require 'dictionnary.php';
require './contact/setDisplay.php';
require 'business-csv.php';
?>

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
            <h1><?= $dictionnary['register.page.section.payment'] ?></h1>
            <h2><?= $dictionnary['register.page.section.payment2'] ?></h2>
        </div>
        <div>
            <h2>
                <h2><?= $dictionnary['register.page.section.info'] ?></h2>
            </h2>
            <form method="post" action="register.php" enctype="multipart/form-data">
                <?php
                foreach ($radioTypes as $rType) {
                    echo "<input type='radio' name='cartes' id='" . $rType['id'] . "' value='" . $rType['value'] . "'>" . "<label>" . $rType['label'] . "</label>";
                }
                foreach ($InfoTypes as $IType) {
                    echo "<div><label for='" . $IType['for'] . "'>" . $IType['label'] . "</label><input type='" . $IType['type'] . "' id='" . $IType['for'] . "' name='" . $IType['for'] . "'></div>";
                }
                ?>
                <h2><?= $dictionnary['register.page.section.payment.info'] ?></h2>
                <label><?= $dictionnary['register.model.creditCardType.label'] ?></label>
                <select name="type_card">
                    <?php
                    foreach ($creditCardTypes as $cardType) {
                        echo "<option name='" . $cardType['name'] . "' value='" . $cardType['value'] . "'>" . $cardType['label'] . "</option>";
                    }
                    echo readLinesFromCSV_forCBdisplay()
                    ?>
                </select>
                <label for="card"><?= $dictionnary['register.page.section.payment.info.cb'] ?></label><input id="card" name="card" type="number"></br>
                <label for="exp_card"><?= $dictionnary['register.page.section.payment.info.cbexp'] ?></label><input id="exp_card" name="exp_card" type="date">
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

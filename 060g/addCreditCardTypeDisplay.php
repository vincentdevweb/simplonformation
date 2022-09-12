<?php require_once('dictionnary.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title><?= $dictionnary['addCreditCardType.page.title'] ?></title>
</head>

<body class="container">

    <?php include('header.php') ?>

    <main>
        <form method="POST" action="addCreditCardType.php">

            <div>
                <h1><?= $dictionnary['addCreditCardType.page.title'] ?></h1>
                <p><?= $dictionnary['addCreditCardType.page.formInformation'] ?></p>
            </div>

            <section>

                <label for="name" class="form-label"><?= $dictionnary['addCreditCardType.page.name'] ?> *</label>
                <input type="text" id="name" name="name" class="form-control" />

                <label for="value" class="form-label"><?= $dictionnary['addCreditCardType.page.value'] ?> *</label>
                <input type="text" id="value" name="value" class="form-control" />

                <label for="label" class="form-label"><?= $dictionnary['addCreditCardType.page.label'] ?> *</label>
                <input type="text" id="label" name="label" class="form-control" />
            </section>

            <input type="submit" value="<?= $dictionnary['addCreditCardType.page.submit'] ?>" />
        </form>
    </main>

    <?php include('footer.php') ?>

</body>

</html>
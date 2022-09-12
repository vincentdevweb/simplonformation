<?php require_once('dictionnary.php') ?>
<?php require_once('business-csv.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title><?= $dictionnary['register.page.title'] ?></title>
</head>

<body class="container">

    <?php include('header.php') ?>

    <main>
        <form method="POST" action="register.php">

            <div>
                <h1><?= $dictionnary['register.page.title'] ?></h1>
                <p><?= $dictionnary['register.page.formInformation'] ?></p>
            </div>

            <section>
                <h2><?= $dictionnary['register.page.section.contact'] ?></h2>

                <label for="title" class="form-label"><?= $dictionnary['register.page.section.contact.title'] ?></label>
                <div class="form-check">
                    <label for="ace" class="form-check-label"><?= $dictionnary['register.page.section.contact.title.ace'] ?></label>
                    <input type="radio" id="ace" name="title" value="ace" checked="checked" class="form-check-input" />
                </div>
                <div class="form-check">
                    <label for="king" class="form-check-label"><?= $dictionnary['register.page.section.contact.title.king'] ?></label>
                    <input type="radio" id="king" name="title" value="king" class="form-check-input" />
                </div>
                <div class="form-check">
                    <label for="queen" class="form-check-label"><?= $dictionnary['register.page.section.contact.title.queen'] ?></label>
                    <input type="radio" id="queen" name="title" value="queen" class="form-check-input" />
                </div>

                <label for="name" class="form-label"><?= $dictionnary['register.page.section.contact.name'] ?> *</label>
                <input type="text" id="name" name="name" class="form-control" />

                <label for="email" class="form-label"><?= $dictionnary['register.page.section.contact.email'] ?> *</label>
                <input type="email" id="email" name="email" class="form-control" />

                <label for="password" class="form-label"><?= $dictionnary['register.page.section.contact.password'] ?> *</label>
                <input type="password" id="password" name="password" class="form-control" />
            </section>

            <section>
                <h2><?= $dictionnary['register.page.section.payment'] ?>s</h2>

                <?php
                $cardTypeLinesAsArrays = readLinesFromCSV('creditCardType.csv');
                $ignoredHeaders = array_shift($cardTypeLinesAsArrays);
                ?>

                <label for="cardType" class="form-label"><?= $dictionnary['register.model.creditCardType.label'] ?></label>
                <select name="cardType" id="cardType" class="form-select">
                    <?php
                    foreach ($cardTypeLinesAsArrays as $cardType) {
                        echo "<option name='" . $cardType[0] . "' value='" . $cardType[1] . "'>" . str_replace('"', '', $cardType[2]) . "</option>";
                    }
                    ?>
                </select>

                <label for="cardNumber" class="form-label"><?= $dictionnary['register.page.section.payment.cardNumber'] ?> *</label>
                <input type="tel" id="cardNumber" name="cardNumber" class="form-control" />

                <label for="expirationDate" class="form-label"><?= $dictionnary['register.page.section.payment.expirationDate'] ?> *</label>
                <input type="month" id="expirationDate" name="expirationDate" class="form-control" />
            </section>

            <input type="submit" value="<?= $dictionnary['register.page.submit'] ?>" />
        </form>
    </main>

    <?php include('footer.php') ?>

</body>

</html>
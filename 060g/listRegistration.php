<?php require_once('dictionnary.php') ?>
<?php require_once('business-csv.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title><?= $dictionnary['listRegistration.page.title'] ?></title>
</head>

<body class="container">

    <?php include('header.php') ?>

    <main>
        <h1><?= $dictionnary['listRegistration.page.title'] ?></h1>

        <?php $linesAsArrays = readLinesFromCSV('registration.csv'); ?>

        <table class="table">
            <thead>
                <tr>
                    <?php $headers = array_shift($linesAsArrays); ?>
                    <?php foreach ($headers as $header) {
                        echo "<th>$header</th>";
                    } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($linesAsArrays as $lineAsArray) {
                    echo '<tr>';
                    foreach ($lineAsArray as $cell) {
                        echo '<td>' . $cell . '</td>';
                    }
                    echo '<tr>';
                } ?>
            </tbody>
        </table>
    </main>

    <?php include('footer.php') ?>

</body>

</html>
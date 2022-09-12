<?php require 'dictionnary.php';
require 'business-csv.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Page de résultats</title>
</head>

<body>
    <?php require 'header.php'; ?>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <tbody>
                <tr>
                    <?php
                    $name = './contact/creditCardType.csv';
                    echo readLinesFromCSV($name);
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
    <?php require 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
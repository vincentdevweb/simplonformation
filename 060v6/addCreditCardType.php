<?php

require 'business-csv.php';

error_reporting(E_ERROR | E_PARSE);

$nom = $_POST['name'];

$type_card = $_POST['type'];

$csv_com = array(" $type_card | $nom");

$csv_init_credit = array(" TYPE DE CARTE | NOM ");


// Open a file in append mode ('a')
$fp_creditcard = './contact/creditCardType.csv';

writeLineToCSV($csv_com, $fp_creditcard, $csv_init_credit);

header('Location: listCreditCardType.php');

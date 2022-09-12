<?php

require 'business-csv.php';

error_reporting(E_ERROR | E_PARSE);

$cartes = $_POST['cartes'];

$nom = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$type_card = $_POST['type_card'];

$cb = $_POST['card'];
$exp_cb = $_POST['exp_card'];

$csv_com = array("$nom | $email | $password | $cb | $exp_cb | $cartes | $type_card ");

$csv_init_reg = array(" NOM | EMAIL | MOT DE PASSE | CB | DATE EXPIRATION CB | TYPE | TYPE DE CARTE");


// Open a file in append mode ('a')
$fp_reg_csv = './contact/register.csv' ;

writeLineToCSV($csv_com, $fp_reg_csv,$csv_init_reg);

header('Location: listRegistration.php');

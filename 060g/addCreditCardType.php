<?php

require_once('business-csv.php');

// Retrieve data from form
$formData = $_POST;
print_r($formData);

// Write form data to csv file
$filename = 'creditCardType.csv';
writeLineToCSV($formData, $filename);

// Redirect to registrations list
header('location: listCreditCardType.php');

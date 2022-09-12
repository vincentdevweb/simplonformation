<?php

require_once('business-csv.php');

// Retrieve dat from form
$formData = $_POST;

// Write form data to csv file
$filename = 'registration.csv';
writeLineToCSV($formData, $filename);

// Redirect to registrations list
header('location: listRegistration.php');

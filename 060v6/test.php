<?php require 'dictionnary.php'; 
 require './contact/setDisplay.php'; 
 require 'business-csv.php'; 

$f = fopen("./contact/creditCardType.csv", "r");
                    displayCB_on_REGISTER($f);
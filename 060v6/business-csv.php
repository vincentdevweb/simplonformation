<?php

function writeLineToCSV($csv, $fp_name, $csv_init)
{
    $fp = fopen($fp_name, 'a');

    //créer un tableau en bouclant première ligne
    //mise en forme du tableau créé avec bootstrap
    if (filesize($fp_name) == 0) {
        fputcsv($fp, $csv_init);
    }

    // Append input data to the file  
    fputcsv($fp, $csv);

    // close the file
    fclose($fp);
};

function readLinesFromCSV($fp_name)
{
    $f = fopen($fp_name, 'r');
    $i = 0;
    $readLine = '';
    while (($line = fgetcsv($f)) !== false) {
        $row = $line[0];
        $cells = explode("|", $row);
        if ($i == 0) {
            $i++;
            $readLine .= "<tr class='font-weight-bold text-info'>";
        } else {
            $readLine .= "<tr>";
        };
        foreach ($cells as $cell) {
            $readLine .= "<td>" . htmlspecialchars($cell) . "</td>";
        }
    }
    fclose($f);
    return $readLine;
};

function readLinesFromCSV_forCBdisplay()
{
    $f = fopen("./contact/creditCardType.csv", "r");

    if (filesize('./contact/creditCardType.csv') != 0) {
        $i = 1;
        $stock = '';
        while (($line = fgetcsv($f)) !== false) {
            $row = $line[0];
            $cells = explode("|", $row);
            foreach ($cells as $cell) {
                $i++;
                if ((($i % 2) == 0) && ($i != 2)) {
                    $stock .= "<option name='" . $cell . "' value='" . $cell . "'>";
                };
                if (((($i + 1) % 2) == 0) && ($i != 3)) {
                    $stock .= $cell . "</option>";
                };
            }
        }
        fclose($f);
        return $stock;
    }
};

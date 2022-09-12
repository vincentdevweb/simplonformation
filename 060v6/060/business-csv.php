<?php

function writeLineToCSV($lineAsArrayOfKeyValue, $filename)
{
    $csvSeparator = '|';
    $f = fopen($filename, 'a');

    // - header (only at first write)
    if (filesize($filename) == 0) {
        fputcsv($f, array_keys($lineAsArrayOfKeyValue), $csvSeparator);
    }

    // - add row
    fputcsv($f, array_values($lineAsArrayOfKeyValue), $csvSeparator);

    fclose($f);
};

/**
 *  Read lines from CSV file.
 *  NOTE the first line represents 'headers'.
 * 
 * @return Array An array of arrays representing each line.
 */
function readLinesFromCSV($filename)
{
    $csvSeparator = '|';
    $linesAsArrays = [];

    $f = fopen($filename, "r");
    while (($line = fgetcsv($f)) !== false) {

        $lineAsArray = explode($csvSeparator, $line[0]);
        $linesAsArrays[] = $lineAsArray;
    }
    fclose($f);

    return $linesAsArrays;
}

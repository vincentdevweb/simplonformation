<?php

$get_value = $_POST['recup'];

$departements = json_decode(file_get_contents('./data/departements.json'));
$content = [];

foreach ($departements as $key => $value) {
    if ($value->region == $get_value) {
        array_push($content, [$key => $value->nom]);
    };
};

echo json_encode(['success' => true, 'content' => $content]);









// $coucou = $departements["01"]["nom"];
// echo $coucou;
//print_r($departements);

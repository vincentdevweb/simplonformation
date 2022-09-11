<?php

if (isset($_POST) && !empty($_POST)) {
    $content = $_POST;
}

if (isset($_GET) && !empty($_GET)) {
    $content = $_GET;
}

if (isset($_FILES) && !empty($_FILES)) {
    array_push($content, $_FILES);
}

echo json_encode(['success'=>true, 'content'=>$content]);


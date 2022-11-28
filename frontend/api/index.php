<?php

require('../../config.php');

$info = json_decode(file_get_contents('../../info.json'), true);

$response = array(
    "result" => null
);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['key'])) {
    if ($_POST['key'] != KEY) {
        $response["error"] = "Wrong key";
    }
    // personal info
    elseif (isset($_POST['personal_info'])) {
        $response["result"] = $info;
    }
}

echo json_encode($response);

?>
<?php
if (isset($_GET["id"])) {
    $codeId = $_GET["id"];
    $filePath = "codes/$codeId.json";

    if (file_exists($filePath)) {
        echo file_get_contents($filePath);
    } else {
        echo json_encode(["error" => "Code not found"]);
    }
}
?>

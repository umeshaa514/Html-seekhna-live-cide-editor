<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $html = $_POST["html"] ?? "";
    $css = $_POST["css"] ?? "";
    $js = $_POST["js"] ?? "";

    // यूनिक ID बनाएं (8-डिजिट)
    $codeId = substr(md5(uniqid()), 0, 8);

    // डेटा को JSON फॉर्मेट में सेव करें
    $data = json_encode(["html" => $html, "css" => $css, "js" => $js]);
    file_put_contents("codes/$codeId.json", $data);

    // यूज़र को Code ID भेजें
    echo $codeId;
}
?>

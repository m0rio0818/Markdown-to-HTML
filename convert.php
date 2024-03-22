<?php
$output = [];

if (isset($_POST["markdown"])) {
    $markdownText = $_POST["markdown"];
    $hightLight = $_POST["highlight"];
    $request_body = file_get_contents('php://input');
    $cmd = "python3 ./converter/file-converter.py " . escapeshellarg($markdownText) . " " .  $hightLight;

    exec($cmd, $output);
    
    $html = implode("\n", $output);
    echo $html;
} else {
    echo "エラー: Markdownテキストが提供されていません。";
}

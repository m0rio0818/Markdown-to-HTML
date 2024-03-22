<?php
$output = [];

if (isset($_POST["markdown"])) {
    $markdownText = $_POST["markdown"];
    $cmd = "python3 ./converter/file-converter.py " . escapeshellarg($markdownText);

    $request_body = file_get_contents('php://input');
    exec($cmd, $output);

    $html = implode("\n", $output);
    echo $html;
} else {
    echo "エラー: Markdownテキストが提供されていません。";
}

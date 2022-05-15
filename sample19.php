<?php
$json_sample = [
    "title" => "JSONサンプル",
    "items" => [
        "りんご",
        "みかん",
        "れもん"
        ]
    ];

    $json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
    echo $json;
    file_put_contents('json_sample.json', $json);
?>
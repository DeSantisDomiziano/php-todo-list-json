<?php 

if (isset($_POST['newTask'])) {
    $task = [
        "todo" => $_POST['newTask'],
        "do" => false
    ];

    $dataPHP = file_get_contents('data_json.json');
    $convertData = json_decode($dataPHP, true);
    array_unshift($convertData, $task);
    $dataJSON = json_encode($convertData);
    file_put_contents('data_json.json', $dataJSON);
    header('Content-Typer: application/json');
    echo $dataJSON;
}

?>
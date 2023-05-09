<?php 
if (isset($_POST['i'])) {

    $dataPHP = file_get_contents('data_json.json');
    $convertData = json_decode($dataPHP, true);
    array_splice($convertData, $_POST['index'], 1);
    $dataJSON = json_encode($convertData);
    file_put_contents('data_json.json', $dataJSON);
    header('Content-Typer: application/json');
    echo $dataJSON;
}
?>
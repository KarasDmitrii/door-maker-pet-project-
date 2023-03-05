<?php

$database = require 'connect-mysql.php';


function groupByKey($arr) {
    $result = [];

    foreach ($arr as $item) {
        if (isset($result[$item['id_names']])) {
            array_push($result[$item['id_names']], $item);
        } else {
            $result[$item['id_names']] = [$item];
        }
    }

    return $result;
}

$paramNames = $database->query("SELECT paramValues.*, paramNames.name, paramNames.nameValue FROM paramValues INNER JOIN paramNames ON paramNames.id = paramValues.id_names;")->fetchAll(PDO::FETCH_ASSOC);


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
echo json_encode(groupByKey($paramNames));







<?php

$database = require '../connect-mysql.php';
include "htmlCreator.php";
include "sendFileTelegram.php";


$json = file_get_contents('php://input');
$data = $json ? json_decode($json, true) : null;

$data ? $data["acces"] = implode(", ", $data["acces"]) : null;
if ($data) {
    $sql = "INSERT INTO orders (colorPrint, colorSkin, colorHandle, width, height, opened, acces, price) VALUES (:colorPrint, :colorSkin, :colorHandle, :width, :height, :opened, :acces, :price)";
    $stmt = $database->prepare($sql);
    $stmt->execute($data);
}


$order = $database->query("SELECT * FROM orders ORDER BY id DESC LIMIT 1")->fetchAll(PDO::FETCH_ASSOC);

header("Access-Control-Allow-Origin: http://localhost:3000");
header("content-type: application/json");
header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
echo json_encode($_POST) ;


require __DIR__.'/../vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html = new Html();
$code = $html -> getHtml($order[0]);
$dompdf->loadHtml($code);

$dompdf->setPaper('A4' );

$dompdf->render();

$output = $dompdf->output();
file_put_contents('file.pdf', $output);
orderSendTelegram();
print_r($order);

?>
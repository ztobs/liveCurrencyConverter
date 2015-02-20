<?php
error_reporting(0);
$from = $_POST['from'];
$to = $_POST['to'];
$money = $_POST['money'];

$data = json_decode(file_get_contents("http://rate-exchange.appspot.com/currency?from=$from&to=$to"));
$amount = number_format($data->rate*$money, 2);
echo $amount." ".$to;
?>

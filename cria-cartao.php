<?php

require_once('modelo/Cartao.php');

$cartao = new Cartao($_POST['nome'],$_POST['banda'],$_POST['data'],$_POST['genero'],$_POST['capa'],$_POST['link']);

echo"
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet'>
".$cartao->cartao().
"
<title>Cadstro de Cartao</title>
</head>
<body>
";
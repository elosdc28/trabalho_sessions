<?php
session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['usuario']['usuario'])? $_SESSION['usuario']['usuario']: "");
$nome = (isset($_SESSION['usuario']['nome'])? $_SESSION['usuario']['nome']: "");
$endereco = (isset($_SESSION['usuario']['endereco'])? $_SESSION['usuario']['endereco']: "");
$valorTotal = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");
$metpag = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");
$numcartao_avista = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");
$numcartao_credito = (isset($_SESSION['valortotal'])? $_SESSION['valortotal']: "");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    Resumo da Compra
</body>
</html>
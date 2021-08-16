<?php
require "../model/cadastrar.php";
$carrosCtl = new Carros();

$marca = $_POST['data']['marca'];
$modelo = $_POST['data']['modelo'];
$cor = $_POST['data']['cor'];
$motor = $_POST['data']['motor'];

$cadastrar = $carrosCtl->cadastrarCarro($marca, $modelo, $cor, $motor);

return $cadastrar;




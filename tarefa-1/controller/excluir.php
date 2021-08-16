<?php
require_once '../Model/excluirCarro.php';
$excluir = new ExcluirModel;

if ($_GET['fx'] == "excluir") {
    $id_carro = $_POST['carros'];
    $resposta = $excluir->excluirCarro($id_carro);
    if ($resposta == true) {
        echo("<script> window.alert('Veículo excluído com sucesso')</script>");
        echo ("<script> window.location.replace('../view/excluirVeiculos.php') </script>");
    } else {
        echo "<script> alert('Não foi possivel excluir o veículo')</script>";
        echo ("<script> window.location.replace('../view/excluirVeiculos.php') </script>");
    }
}

<?php
require "../controller/listagem.php";
$listagemCarros = new ListagemCarros();
$carros = $listagemCarros->mostrarCarros();

?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'estrutura/header.php'; ?>
    <link rel="stylesheet" href="css/cadastro.css" media="screen">
</head>

<body class="body">
    <div class="row">
        <div class=" col-2"></div>
        <div class="col col-8">
            <h2 class="titulo-1">Bem vindo(a): </h2>
            <h3 class="titulo-1">Cadastrar carros</h3>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class=" col-4"></div>
        <div class="col col-4 formulario-cadastro">
            <form method="POST" class="formulario">
                <label class="label-formulario">Marca:*</label>
                <input type="text" class="input-formulario" id="marca" name="marca" require="">
                <label class="label-formulario">Modelo:*</label>
                <input type="text" class="input-formulario" id="modelo" require="">
                <label class="label-formulario">Cor:*</label>
                <input type="text" class="input-formulario" id="cor" require="">
                <label class="label-formulario">motor:*</label>
                <select class="input-formulario">
                    <?php foreach ($carros->motores as $motor) { ?>
                        <option id="motor" value="<?= $motor->id ?>"><?= $motor->id ?></option>
                    <?php } ?>
                </select>
                <button class="btn-cadastrar btn-outline-success col-4" >Cadastrar</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class=" col-4"></div>
        <div class="col col-4 msg"><p class="mensagem"></p></div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class=" col-4"></div>
        <div class="col col-4" style="text-align: center;"><a href="index.php" class="btn btn-primary col-4 btn-home" >Voltar para home</a></div>
        <div class="col-4"></div>
    </div>
    <script src="js/cadastro.js"></script>
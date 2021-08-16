<?php
require "../controller/listagem.php";
$listagemCarros = new ListagemCarros();
$carros = $listagemCarros->mostrarCarros();
$carrosInternos = $listagemCarros->listagemCarrosInternos();
?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'estrutura/header.php'; ?>
</head>

<body class="body">
    <div class="row">
        <div class=" col-2"></div>
        <div class="column-3 col col-8">
            <h2 class="titulo-1">Bem vindo(a) </h2>
            <h3 class="titulo-1">Excluir carros cadastrados</h3>
        </div>
        <div class="col-2"></div>
    </div>
    <?php
    if ($carrosInternos != 'Nenhum veículo cadastrado') { ?>
        <div class="row">
            <form method="POST" action="../Controller/excluir.php?fx=excluir" style="display: contents;">
                <?php
                foreach ($carrosInternos as $value) {
                    $motores = $listagemCarros->pertenceMotor($value['fk_id_motor_motores']);
                ?>
                    <div class="col-6">
                        <div class="carros">
                            <input type="radio" class="excluir-carro" id="<?= $value['modelo_carro'] ?>" name="carros" value="<?= $value['id_carro'] ?>">
                            <div class="bloco-exibe-consulta" for="carros">
                                <div class="btn-exibe-consulta btn-padrao">
                                    <?= $value['marca_carro'] . ' ' . $value['modelo_carro'] . ' ' . $value['cor_carro'] ?>
                                </div>
                            </div>
                            <p class="detalhes">Detalhes do motor:</p>
                            <div class="bloco-exibe-detalhes">
                                <label class="texto-detalhe">Posicionamento dos cilindros : <?= $motores->posicionamento_cilindros ?></label>
                                <label class="texto-detalhe">Número de cilindros : <?= $motores->cilindros ?></label>
                                <label class="texto-detalhe">Litragem : <?= $motores->litragem ?></label>
                                <label class="texto-detalhe">Observação : <?= $motores->observacao ?></label>
                            </div>
                            </inpunt>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="col-12">
                    <button type="submit" class="btn-exibe-consulta btn-excluir btn-padrao">
                        Excluir
                    </button>
                </div>
            </form>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class=" col-4"></div>
            <div class="col col-4 msg-nada-cadastrado">
                <p class="mensagem-nada-cadastrado">Não existe veículos internos cadastrados</p>
            </div>
            <div class="col-4"></div>
        </div>
    <?php } ?>


    <div class="row">
        <div class="col-1"></div>
        <div class="col-4">
            <a href="cadastrarVeiculo.php" class="btn-exibe-consulta btn-funcoes">
                Cadastrar novo veículo
            </a>
        </div>
        <div class="col-1"></div>
        <div class="col-1"></div>
        <div class="col-4">
            <a href="excluirVeiculos.php" class="btn-exibe-consulta btn-funcoes">
                Excluir veículo
            </a>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class=" col-4"></div>
        <div class="col col-4" style="text-align: center;"><a href="index.php" class="btn btn-primary col-4 btn-home">Voltar para home</a></div>
        <div class="col-4"></div>
    </div>
</body>

</html>
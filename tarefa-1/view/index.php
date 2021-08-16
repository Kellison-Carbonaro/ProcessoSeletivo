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
            <h2 class="titulo-1">Bem vindo(a): </h2>
            <h3 class="titulo-1">Detalhes dos carros cadastrados</h3>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <?php foreach ($carros->carros as $value) {
            $motores = $listagemCarros->pertenceMotor($value->motor_id);
        ?>
            <div class="col-6">
                <div class="carros">
                    <div class="bloco-exibe-consulta">
                        <div class="btn-exibe-consulta btn-padrao">
                            <?= $value->marca . ' ' . $value->modelo . ' ' . $value->cor ?>
                        </div>
                    </div>
                    <p class="detalhes">Detalhes do motor:</p>
                    <div class="bloco-exibe-detalhes">
                        <label class="texto-detalhe">Posicionamento dos cilindros : <?= $motores->posicionamento_cilindros ?></label>
                        <label class="texto-detalhe">Número de cilindros : <?= $motores->cilindros ?></label>
                        <label class="texto-detalhe">Litragem : <?= $motores->litragem ?></label>
                        <label class="texto-detalhe">Observação : <?= $motores->observacao ?></label>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    if ($carrosInternos != 'Nenhum veículo cadastrado') { ?>
        <div class="row">
            <?php
            foreach ($carrosInternos as $value) {
                $motores = $listagemCarros->pertenceMotor($value['fk_id_motor_motores']);
            ?>

                <div class="col-6">
                    <div class="carros">
                        <div class="bloco-exibe-consulta">
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
                    </div>
                </div>
            <?php
            }
            ?>
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
</body>

</html>
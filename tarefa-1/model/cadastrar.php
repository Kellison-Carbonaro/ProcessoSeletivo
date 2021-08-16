<?php

class Carros
{

    public function cadastrarCarro($marca, $modelo, $cor, $motor)
    {
        if ($this->validacao($marca, $modelo, $cor, $motor)) {

            require "../model/banco.php";
            $banco = new Banco();
            $conexao = $banco->conectar();

            $sql = $conexao->prepare("INSERT INTO carros (marca_carro, modelo_carro, cor_carro, fk_id_motor_motores	
        )
        VALUES (:ma, :mo, :c, :motor)");
            $sql->bindValue(":ma", $marca);
            $sql->bindValue(":mo", $modelo);
            $sql->bindValue(":c", $cor);
            $sql->bindValue(":motor", $motor);
            $sql->execute();
            if ($sql->rowCount() >= 1) {
                echo json_encode('Carro cadastrado com sucesso');
            } else {
                echo json_encode("Falha ao cadastrar o carro");
            }
        } else {
            $this->validacao($marca, $modelo, $cor, $motor);
            echo json_encode("Falha ao cadastrar o carro");
        }
    }

    private function validacao($marca, $modelo, $cor, $motor)
    {
        if (!empty($marca) && !empty($modelo) && !empty($cor) && !empty($motor)) {
            return true;
        }
    }
}

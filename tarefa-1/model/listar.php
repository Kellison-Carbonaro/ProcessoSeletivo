<?php 
class listagemCarrosInternos
{
    public function listarCarrosInternos()
    {
        require "../model/banco.php";
        $banco = new Banco();
        $conexao = $banco->conectar();
        $sql = $conexao->prepare("SELECT * FROM carros");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);       
        if($sql->rowCount() >= 1){
            return $resultado;
        }else {
            return "Nenhum veículo cadastrado";
        }
    }
    
}

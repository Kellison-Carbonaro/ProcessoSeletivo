<?php 
class ExcluirModel
{
    public function excluirCarro($id_carro)
    {
        require "../model/banco.php";
        $banco = new Banco();
        $conexao = $banco->conectar();
        $sql = $conexao->prepare("DELETE FROM carros WHERE id_carro = $id_carro");
        $sql->execute();    
        if($sql->rowCount() >= 1){
            return true;
        }else {
            return "Nenhum veículo cadastrado";
        }
    }
    
}

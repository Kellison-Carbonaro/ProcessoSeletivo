<?php 

namespace App\Services;

use App\Model\Rotina;

class RotinaService {
    public function post()
    { 
        if($_POST){
        $page = $_POST['page'];  
            $resultado = array(
                'retorno' =>Rotina::consultaHorario($page),
                'páginas totais' => Rotina::consultaPaginas(),
            );      
            return $resultado;
        }else{
            throw new \Exception("Nenhum parâmetro encontrado");
        }
        
    }
}
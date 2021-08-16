<?php

namespace App\Model;

class Rotina
{
    private static $tabela = 'rotina';

    public static function consultaHorario(int $page)
    {
        $pagination = self::conversaoPage($page);
        $conexao = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASSAWORD);
        $sql = 'SELECT * FROM ' . self::$tabela . ' ORDER BY hora ASC LIMIT ' . $pagination . ', 5';        
        $sql = $conexao->prepare($sql);
        $sql->execute();
        $resultado = array();
        if ($sql->rowCount() > 0){
            while ($row = $sql->fetch(\PDO::FETCH_ASSOC)) {
                $resultado[] = $row;
            }
            return $resultado;
        }else{
            throw new \Exception("Nenhum horario encontrado");
        }
    }

    private static function conversaoPage($page){
        $page = $page - 1;
        return $page = $page * 5;
    }

    public static function consultaPaginas()
    {
        $conexao = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASSAWORD);
        $sql = 'SELECT COUNT(*) FROM ' . self::$tabela;     
        $sql = $conexao->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0){
            $registros = $sql->fetch(\PDO::FETCH_ASSOC);
            $paginasTotais = $registros['COUNT(*)'] / 5;
            return $paginasTotais;
        }else{
            throw new \Exception("Não foi possivel localizar o numero de páginas");
        }
    }
}

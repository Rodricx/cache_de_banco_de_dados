<?php 
namespace app\tables;

use app\database\DataBase;

class DAO extends DataBase
{
    // Método utilizado para inserir dados em uma tabela
    public function insert($table, $dado1, $dado2)
    {
        $this->connection()->exec("INSERT INTO $table(nome, sobrenome) VALUES('$dado1', '$dado2')");
    }

    // Método responsável por selecionar todos os registros de uma tabela
    public function selectAll($table)
    {
        return $query = $this->connection()->query("SELECT * FROM $table")->fetchAll();
        
    }
}


?>
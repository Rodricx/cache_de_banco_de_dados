<?php 
namespace app\tables;
// require "../database/DataBase.php";

use app\database\DataBase;

class CreateTable extends DataBase
{
    // Método utilizado para criar tabela
    public function createTable($table, $arguments)
    {
        $this->connection();
        $this->conex->exec("CREATE TABLE IF NOT EXISTS $table($arguments)");
    }

    // Método responsável por deletar tabela
    public function deleteTable($table)
    {
        $this->connection();
        $this->conex->exec("DROP TABLE IF EXISTS $table");
    }
}
?>
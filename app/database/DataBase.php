<?php 
namespace app\database;

use PDO;

abstract class DataBase extends PDO
{

    protected $host;
    protected $user;
    protected $password;
    protected $conex;

    public function __construct()
    {
        $this->host = "sqlite:./database.sqlite";
        $this->user = "";
        $this->password = "";
    }

    public function connection()
    {
        $this->conex = new PDO($this->host, $this->user, $this->password);
        return $this->conex;
    }

}
?>
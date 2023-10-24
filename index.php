<?php 
require "autoload.php";

use app\tables\DAO;
use app\controller\Cache;
use app\controller\readFile;

$dao = new DAO();
$cache = new Cache();
$read_file = new readFile();

// Método para recuperar todos os registros da tabela
$dao->selectAll("Pessoa");

// Método que guarda todos os registros em memória cache
$res = $cache->cacheMemory($dao->selectAll("Pessoa"));

// Método que cria arquivo .txt e grava todos os dados em cache no arquivo recêm criado
$cache->createFileCache("cache.txt", $res);


// Método que realiza a leitura do arquivo .txt .
$read_file->readFile("cache.txt");

?>
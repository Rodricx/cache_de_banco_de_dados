<?php 
namespace app\controller;

class Cache 
{

    public $content_cache;

    // Método responsável por criar arquivo de cache
    public function createFileCache($name_file, $content)
    {
        if(!file_exists($name_file)){
            file_put_contents($name_file, $content);
        }
    }

    // Este método tem a finalidade de criar uma variável cache e guardar os dados
    public function cacheMemory($data)
    {
        ob_start();
        print_r($data);
        $cache = ob_get_contents();
        ob_end_clean();

        return $cache;
    }
}


?>
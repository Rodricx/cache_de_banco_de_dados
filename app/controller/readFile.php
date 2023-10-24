<?php 
namespace app\controller;

class readFile 
{
    public $content;

    // Este método tem a finalidade de capturar um arquivo de quaisquer extensão e realizar a leitura do mesmo.
    public function readFile($file)
    {
        $this->content = file_get_contents($file);

        return print_r($this->content);
    }
}


?>
<?php
require'class.php';

class post{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct(String $T,category $C, String $tag ){
        $this-> titolo = $T;
        $this-> categoria = $C;
        $this-> tag = $tag;


    }

    public function __toString(){
        return "titolo: " . $this->titolo. "\n".
        "categoria: " . $this->categoria->getMyCategory()."\n".
        "tag " . $this->tag. "\n";


    }

    
} 
$cat = new gossip();
$art = new post("titolo", $cat,"tag");
echo $art;

<?php

trait Talk{
    public function saluto(){
        echo "Io sono Batman e sono il tuo peggior incubo \n";
    }

    public function minaccia(){
        echo "Guardati le spalle, io sono sempre nell'ombra \n";
    }

    public function conto($val){
        echo "Questa versione della batmobile mi e costata $val \n";
    }
}



abstract class ParteAnteriore{
    abstract public function attack();
}

abstract class PartePosteriore{
    abstract public function move();
}


class Lanciamissili extends ParteAnteriore{
    public function attack(){
        echo "ti faccio esplodere\n";
    }
}

class Cannone extends ParteAnteriore{
    public function attack(){
        echo "Ti buco da lontano \n";
    }
}

class Mitra extends ParteAnteriore{
    public function attack(){
        echo "adesso sembri il colabrodo di batNonna\n";
    }
}

class Ruote extends PartePosteriore{
    public function move()
    {
        echo "Sono piu veloce di flash\n";
    }
}

class Razzo extends PartePosteriore{
    public function move(){
        echo "Con questo, il traffico di ghotam non e nulla per me\n";
    }
}

class Rampino extends PartePosteriore{
    public function move(){
        echo "Posso driftare sui muri\n";
    }
}


class Batmobile{

   
    use Talk;

    
    public $attacco;
    public $movimento;

   
    public function __construct(ParteAnteriore $_attacco, PartePosteriore $_moviemnto) 
    {
        $this->attacco = $_attacco;
        $this->movimento = $_moviemnto;
    }

    
    public function attacca(){
        $this->attacco->attack();
    }

    public function muvt(){
        $this->movimento->move();
    }

    public function prezzo($val){
        return $this->conto($val);
    }

}

$batmobile1 = new BatMobile(new Mitra , new Ruote); 
print_r($batmobile1);
$batmobile1->saluto();
$batmobile1->prezzo(667354263);


$batmobile2 = new BatMobile( new Cannone , new Razzo ); 

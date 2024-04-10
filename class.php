<?php

abstract class category {

    abstract public function getMyCategory();
} 

class attualità extends category{
    private $type = "attualità";
public function __construct(){}

    public function getMyCategory(){
     return $this-> type;
    }
}
class sport extends category{
    private $type = "sport";
    public function getMyCategory(){
        return $this->type;
       }
}
class gossip extends category{
    private $type = "gossip";
    public function getMyCategory(){
        return $this->type;
       }
}
class storia extends category{
    private $type = "storia";
    public function getMyCategory(){
        return $this->type;
       }
}

$test = new gossip();
echo $test->getMyCategory();
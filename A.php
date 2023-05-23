<?php

/**
 * Creator: Guilherme Fabricio Brito da Rosa
 */

 require 'C.php';

class Usuario {

    public int $A1; // propriedade/atributo
    protected float $A2; // propriedade/atributo

    public function __construct(int $A1, float $A2)
    {
        $this->A1 = $A1; 
        $this->A2 = $A2; 
    }

    public function getMoney(): float 
    {
        return $this->A2;
    }

    public function MA1(){
        echo "Esse é o metodo MA1 ";
    }

    public function MA2(){
        echo "Esse é o metodo MA2";
    }

    public function MA3(){
        echo "Esse é o metodo MA2";
    }
}

$guihe4rt = new Usuario(50, 1000);

$guihe4rt->MA1();
$guihe4rt->MA2();
$guihe4rt->MA3();

$classeC = new C("Exemplo C", 42);
$classeC->MC1();
$classeC->MC2();

?>
<?php

/**
 * Creator: Guilherme Fabricio Brito da Rosa
 */

 class Usuario3 {

    public string $D1; // propriedade/atributo
    protected int $D2; // propriedade/atributo

    public function __construct(string $D1, int $D2)
    {
        $this->D1 = $D1; 
        $this->D2 = $D2; 
    }

    public function getMoney(): float 
    {
        return $this->D2;
    }

    public function MD1(){
        echo "Esse é o metodo MD1";
    }

    public function MD2(){
        echo "Esse é o metodo MD2";
    }
    public function MD3(){
        echo "Esse é método MD3";
    }
    public function MD4(){
        echo "Esse é metodo MD4 ";
    }
}

$guihe4rt = new Usuario3(50, 1000);
    
$guihe4rt->MD1();

?>

<?php

/**
 * Creator: Guilherme Fabricio Brito da Rosa
 */

class Usuario {

    public int $A1; // propriedade/atributo
    protected float $A2; // propriedade/atributo

    public function __construct(string $A1, float $A2)
    {
        $this->A1 = $A1; 
        $this->A2 = $A2; 
    }

    public function getMoney(): float 
    {
        return $this->A2;
    }
}



?>
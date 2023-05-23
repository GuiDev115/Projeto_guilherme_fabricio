<?php

/**
 * Creator: Guilherme Fabricio Brito da Rosa
 */

 class Usuario2 {

    public int $B1; // propriedade/atributo
    protected float $B2; // propriedade/atributo

    public function __construct(string $B1, float $B2)
    {
        $this->B1 = $B1; 
        $this->B2 = $B2; 
    }

    public function getMoney(): float 
    {
        return $this->B2;
    }
}

$guihe4rt = new Usuario2(50, 1000);

echo "Nome de usuário: " . $guihe4rt->B1;

?>
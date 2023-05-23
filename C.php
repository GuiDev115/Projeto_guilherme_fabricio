<?php 

    class C {
    public string $C1;
    public int $C2;

    public function __construct(string $C1, int $C2)
    {
        $this->C1 = $C1;
        $this->C2 = $C2;
    }

    public function MC1() {
        echo "Nome do método: MC1";
    }

    public function MC2() {
        echo "Nome do método: MC2 hm";
    }
}

?>
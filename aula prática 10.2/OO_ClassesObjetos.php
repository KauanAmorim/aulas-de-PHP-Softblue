<HTML>
    <HEAD>
        <TITLE>OO: Classes e Objetos</TITLE>
    </HEAD>
    <BODY>
        
<?php

    class Carro
    {
        private $velocidade;
        private $cor;
        
        public function __construct($cor)
        {
            $this->setCor($cor);
            $this->setVelocidade(0);
        }
        
        public function getVelocidade()
        {
            return $this->velocidade;
        }
        
        public function getCor()
        {
            return $this->cor;
        }
        
        private function setVelocidade($velocidade)
        {
            if($velocidade > 110 || $velocidade < 0)
            {
                echo "Velocidade não permitida<BR>";
            }
            else
            {
                $this->velocidade = $velocidade;
            }
        }
        
        public function setCor($cor)
        {
            $this->cor = $cor;
        }
        
        public function acelerar()
        {
            $this->setVelocidade($this->getVelocidade() + 1);
        }
        
        public function frear()
        {
            $this->setVelocidade($this->getVelocidade() - 1);
        }
    }
    
    //$meuCarro = new Carro();
    //$meuCarro->velocidade = 50;
    //$meuCarro->cor = "Preta";
    //echo "O carro de cor " . $meuCarro->cor . " está andando: " . $meuCarro->velocidade;
    //echo "<BR>";
    
    $meuCarro = new Carro("Vermelha");
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->acelerar();
    $meuCarro->frear();
    $meuCarro->frear();
    echo "O carro de cor " . $meuCarro->getCor() . " está andando: " . $meuCarro->getVelocidade();
    echo "<BR>";
    
    //$meuCarro->setVelocidade(70);
    //echo "O carro de cor " . $meuCarro->getCor() . " está andando: " . $meuCarro->getVelocidade();
    //echo "<BR>";
    
    //$meuCarro->setVelocidade(-230);
    //echo "O carro de cor " . $meuCarro->getCor() . " está andando: " . $meuCarro->getVelocidade();
    //echo "<BR>";
    
    //$meuCarro->cor = "Amarela";
    //$meuCarro->velocidade = 220;
    
    //echo "O carro de cor " . $meuCarro->cor . " está andando: " . $meuCarro->velocidade;
    //echo "<BR>";

?>
        
    </BODY>
</HTML>
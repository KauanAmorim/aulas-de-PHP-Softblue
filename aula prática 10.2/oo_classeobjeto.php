<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>OO: Classes e Objetos</title>
    </head>
    <body>

        <?php

            class carro2
            {
                private $velocidade;
                private $cor;

                public function __construct($cor)
                {
                    $this->setcor($cor);
                    $this->setvelocidade(0);
                }

                public function getvelocidade()
                {
                    return $this->velocidade;
                }

                public function getcor()
                {
                    return $this->cor;
                }

                private function setvelocidade($velocidade)
                {
                    if($velocidade > 100 || $velocidade < 0)
                    {
                        echo "Velocidade não permitida";
                    } else {
                        $this->velocidade = $velocidade;
                    }
                }

                public function setcor($cor)
                {
                    $this->cor = $cor;
                }

                public function acelerar()
                {
                    $this->setvelocidade($this->getvelocidade() + 1);
                }

                public function frear()
                {
                    $this->setvelocidade($this->getvelocidade() - 1);
                }

            }

            //$meuCarro = new carro();
            //$meuCarro->velociade = 50;
            //$meuCarro->cor = "Preta";
            //echo "O carro de cor " . $meuCarro->cor . " está andando: " . $meuCarro->velociade . "<br>";

            $meuCarro = new carro2("Vermelha");
            $meuCarro->acelerar();
            $meuCarro->acelerar();
            $meuCarro->acelerar();
            $meuCarro->acelerar();
            $meuCarro->acelerar();
            $meuCarro->acelerar();
            $meuCarro->acelerar();
            $meuCarro->frear();
            $meuCarro->frear();
            echo "O carro de cor " . $meuCarro->getcor() . " está andando: " . $meuCarro->getvelocidade() . "<br>";

            //$meuCarro->setvelocidade(70);
            //echo "O carro de cor " . $meuCarro->getcor() . " está andando: " . $meuCarro->getvelocidade() . "<br><br>";

            //meuCarro->setvelocidade(-230); echo "<br>";
            //echo "O carro de cor " . $meuCarro->getcor() . " está andando: " . $meuCarro->getvelocidade() . "<br>";



            //$meuCarro->cor = "Amarela";
            //$meuCarro->velociade = 220;
            //echo "O carro de cor " . $meuCarro->cor . " está andando: " . $meuCarro->velociade . "<br>";

        ?>

    </body>
</html>
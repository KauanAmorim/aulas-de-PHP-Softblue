<html lang="pt-br">
    <head>
        <title>oo: classes e objetos</title>
    </head>
    <body>

        <?php

            class carro3
            {
                public $cor;
                public $velocidade;
            }

            $meucarro = new carro3();
            $meucarro->cor = "Preto";
            $meucarro->velocidade = 50;

            echo "O carro de cor " . $meucarro->cor . " está andando: " . $meucarro->velocidade . "<br><br>";

            class carro4
            {
                public $cor;
                public $velocidade;

                public function __construct($cor)
                {
                    $this->cor = $cor;
                    $this->velocidade = 0;
                }

            }

            $meucarro2 = new carro4("Vermelha");
            echo "O carro de cor " . $meucarro2->cor . " está andando: " . $meucarro2->velocidade . "<br>";

            $meucarro2->cor = "Amarela";
            $meucarro2->velocidade = 220;
            echo "O carro de cor " . $meucarro2->cor . " está andando: " . $meucarro2->velocidade . "<br><br>";

            class carro5
            {
                private $cor;
                private $velocidade;

                public function __construct($cor)
                {
                    $this->cor = $cor;
                    $this->velocidade = 0;
                }

                public function getvelocidade()
                {
                    return $this->velocidade;
                }

                public function getcor()
                {
                    return $this->cor;
                }

            }

            $meucarro3 = new carro5("Azul");
            echo "O carro de cor " . $meucarro3->getcor() . " está andando: " . $meucarro3->getvelocidade() . "<br><br><br>";

            class carro6
            {
                private $cor;
                private $velocidade;

                public function __construct($cor)
                {
                    $this-> cor = $cor;
                    $this->velocidade = 0;
                }

                public function getvelocidade()
                {
                    return $this->velocidade;
                }

                public function getcor()
                {
                    return $this->cor;
                }

                public function setvelocidade($velocidade)
                {
                    if($velocidade > 110 || $velocidade < 0)
                    {
                        echo "Velocidade não permitida<br>";
                    }
                    else{
                        $this->velocidade = $velocidade;
                    }
                }

                public function setcor($cor)
                {
                    $this->cor = $cor;
                }

            }

            $meucarro4 = new carro6("Prata");
            echo "O carro de cor " . $meucarro4->getcor() . " está andando: " . $meucarro4->getvelocidade() . "<br><br>";

            $meucarro4->setvelocidade(70);
            echo "O carro de cor " . $meucarro4->getcor() . " está andando: " . $meucarro4->getvelocidade() . "<br><br>";

            $meucarro4->setvelocidade(130);
            echo "O carro de cor " . $meucarro4->getcor() . " está andando: " . $meucarro4->getvelocidade() . "<br><br>";

            $meucarro4->setvelocidade(-230);
            echo "O carro de cor " . $meucarro4->getcor() . " está andando: " . $meucarro4->getvelocidade() . "<br><br>";


            class carro7
            {
                private $cor;
                private $velocidade;

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
                    if($velocidade > 110 || $velocidade < 0)
                    {
                        echo "valocidade não permitida <br>";
                    }
                    else{
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

            $meucarro5 = new carro7("Purple");
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->acelerar();
            $meucarro5->frear();
            $meucarro5->frear();
            $meucarro5->frear();

            echo "O carro de cor " . $meucarro5->getcor() . " está andando: " . $meucarro5->getvelocidade() . "<br>";

        ?>
    </body>
</html>
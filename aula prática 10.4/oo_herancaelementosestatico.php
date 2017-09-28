<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>OO: Herança e Elementos Estáticos</title>
    </head>
    <body>


        <?php

            class Instrumentosmusicais
            {
                public $isPercussao;
                public $volume;

                public function __construct($isPercussao, $volume)
                {
                    $this->isPercussao = $isPercussao;
                    $this->volume = $volume;
                }
                //poderia ser 'final' impedindo sobrescrita
                public function tocar()
                {
                    echo "Tocando no volume: " . $this->volume . " decibéis.<br>";
                }
            }

            $instrumentomusical = new Instrumentosmusicais(true, 80);
            if($instrumentomusical->isPercussao)
            {
                echo "Instrumento de percussão, volume: ". $instrumentomusical->volume . "<br>";
            }
            else{
                echo "Instrumento não de percussão, volume: " . $instrumentomusical->volume . "<br>";
            }
            $instrumentomusical->tocar();

            class Guitar extends Instrumentosmusicais
            {
                public function tocar()
                {
                    echo "Amplificador ligado em " . $this->volume . " decibéis.<br>";
                }

                public function tocarguitar()
                {
                    $this->tocar();
                    parent::tocar();
                }
            }

            $guitar = new Guitar(FALSE, 40);
            if($guitar->isPercussao)
            {
                echo "Instrumento de percussão, volume: " . $guitar->volume . "<br>";
            }
            else{
                echo "Instrumento não de parcussão, volume: " . $guitar->volume . "<br>";
            }
            $guitar->tocar();

            echo "<br><br>";

            $guitar->tocarguitar();
            echo "<br><br>";

            class emusical
            {
                public static $escaladomaior = "C D E F G A B C";
                public $vezesultizada;

                public static function cdecibeis($watts)
                {
                    return $watts / 10;
                }
            }

            echo emusical::$escaladomaior . "<br>";
            echo emusical::cdecibeis(123) . "<br>";

            $emC = new emusical();
            $emC->vezesultizada = 3;
            echo "Foi utilizada: " . $emC->vezesultizada . "<br>";

            $emD = new emusical();
            $emD->vezesultizada = 5;
            echo "Foi utilizada: " . $emD->vezesultizada . "<br>";

            echo $emD::$escaladomaior;

        ?>


    </body>
</html>
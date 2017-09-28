<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <?php

            abstract class Imusical
            {
                public $volume;
                public abstract function tocar();
            }

            interface Transportavel
            {
                public function transportar();
            }

            class Guitar extends Imusical implements Transportavel
            {
                public function tocar()
                {
                    echo "Tocando guitarra <br>";
                }

                public function transportar()
                {
                    echo "Transporte de guitarra: entra em contato com a loja de música. <br>";
                }

            }

            class Computador implements Transportavel
            {
                public function transportar()
                {
                    echo "Transporte de computador: Chame a Softblue!";
                }
            }

            $guitar = new Guitar();
            $guitar->tocar();
            $guitar->transportar();

            $computador = new Computador();
            $computador->transportar();

        ?>


    </body>
</html>
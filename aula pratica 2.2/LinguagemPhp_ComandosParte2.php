<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>A Linguagem PHP</title>
    </head>
    <body>
    <?php

        echo "Iniciando <br>";

        // Se tiver error no código, sejá inexistencia de arquivo ou caminho errado, passa batido.
        // include("LinguagemPhp_ArquivoAuxiliar.php");
        // include_once("LinguagemPhp_ArquivoAuxiliar.php");

        // Se tiver erro no código, como a explicação acima, o arquivo trava e mostra uma mensagem de erro.
        // require("LinguagemPhp_ArquivoAuxiliar.php");
        // require_once("LinguagemPhp_ArquivoAuxiliar.php");

        echo "Finalizando <br>";

        // header("Location: http://www.google.com.br");

        // ob_start(); e ob_flush(); devem ser colocados antes do html  e /html em versões antigas do PHP

        function dobro(float $valor): float { //float é igual a valor decimal.
            $valor *= 2;
            return $valor;
        }

        $x = dobro(5);
        echo $x . "<br>";

        function soma(int $valor1, int $valor2): int { //int é igual valor inteiro (você sabe).
            return $valor1 + $valor2;
        }
        $x = soma(5, 8);
        echo $x . "<br>";
    ?>
    </body>
</html>

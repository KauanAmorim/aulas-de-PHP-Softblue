<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>A linguagem php</title>
    </head>
    <body>

        <?php

            echo "Hello World! <br>";

            $var1 = "PHP";
            $variavelValor = 50.15;

            echo $var1 . "<br>";
            echo $variavelValor . "<br>";

            define("PI", 3.14);
            define("NOME_EMPRESA", "Softblue");

            $resultado = 3 * PI;
            echo $resultado . "<br>";
            echo "Nome da empresa: " . NOME_EMPRESA . "<br>";

            $a = 3 + 5;
            $b = 3 - 5;
            $c = 3 * 5;
            $d = 10 / 5;
            $e = 9 % 2;

            echo $a . "<br>"; echo $b . "<br>"; echo $c . "<br>"; echo $d . "<br>"; echo $e . "<br>";

            $x = 3;
            $x++;
            echo $x . "<br>";

            $x = 3;
            ++$x;
            echo $x . "<br>";

            $x = 3;
            $y = 1 + $x++;
            echo "x: " . $x . "y: " . $y . "<br>";

            $x = 3;
            $y = 1 + ++$x;
            echo "x: " . $x . "y: " . $y . "<br>";

            $a = 3;
            $a += 5;
            echo $a . "<br>";

            echo round(5.5, 0, PHP_ROUND_HALF_DOWN) . "<br>";
            echo round(5.5, 0, PHP_ROUND_HALF_UP) . "<br>";
            echo round(5.5, 0, PHP_ROUND_HALF_EVEN) . "<br>";
            echo round(5.5, 0, PHP_ROUND_HALF_ODD) . "<br>";

            echo round(5.55,1, PHP_ROUND_HALF_DOWN) . "<br>";
            echo round(5.55,1, PHP_ROUND_HALF_UP). "<br>";
            echo round(5.55,1, PHP_ROUND_HALF_EVEN). "<br>";
            echo round(5.55,1, PHP_ROUND_HALF_ODD). "<br>";


            $x = 5;

            if($x < 5 & ++$x < 4){
                echo "Condição do comando IF foi aceita. <br>";
            }
            else {
                echo "Condição do comando IF negada. <br>";
            }
            echo $x . "<br>";

            if(10 / 2 == 5){
                $x = "É cinco. <br>";
            }
            else {
                $x = "Não é cinco. <br>";
            }
            echo $x;

            $x = 10 / 2 == 5 ? "É cinco. <br>" : "Não é cinco. <br>";
            echo $x;

            $y = 13;
            $y = $y % 2 == 0 ? "PAR. <br>" : "ÍMPAR. <br>" ;
            echo $y;

            // Funciona
            // O PHP já coloca as chaves automáticamente.
            if(2 == 2)
                echo "Operação 1 <br>";

            if(2 == 5)
                echo "Operação 2 <br>";
                echo "Operação 2.5 <br>";

            if(2 == 7)
                echo "operação 3 <br>";
            else
                echo "operação 4 <br>";

            //--------------------

            $i = 1;
            switch($i) {
                case 0:
                    echo "O valor de i é 0 <br>";
                    break;

                case 1:
                    echo "O valor de i é 1 <br>";
                    break;

                case 2:
                    echo "O valor de i é 2 <br>";
                    break;

                default:
                    echo "NENHUM <br>";
                    break;
            }

            for($i = 0; $i <= 10; $i++){

                if($i == 5){
                    continue;
                }
                echo $i . " ";
            }
            echo "A sequência do código está funcionando...<br>";

            $i = 0;
            while($i < 10){

                $i++;
                if($i == 5){
                    continue;
                }
                echo $i . " ";

            }
            echo "<br>";


            $i = 0;
            do {

                echo $i . " ";
                $i++;

            }while($i < 10);
            echo "<br>";


            /* Não é uma boa prática de programação, para o PHP (é bom ficar atendo á isso) */
            echo "Código iniciando...<br>";
            goto saindo;

            echo "Código executando...<br>";

            saindo:
            echo "Código finalizando...<br>";

            echo $_SERVER["SERVER_ADDR"]. "<br>";
            echo $_SERVER["SERVER_NAME"]. "<br>";
            echo $_SERVER["HTTP_USER_AGENT"]. "<br>";
            echo $_SERVER["REMOTE_ADDR"]. "<br>";












        ?>
    </body>
</html>
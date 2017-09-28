<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exercicio 2</title>
    </head>
    <body>
        <?php


            /* --- 1* ---
            for($i = 0; $i <= 100; $i++){
                echo $i . "<br>";
            }
            */

            /* --- 2* ---
            for($i = 0; $i <= 100; $i++){
                if($i%3 == 0){
                    echo $i . "<br>";
                }
            }
            */

            /* --- 3* ---
            $x = 0;
            for($i = 50; $i <= 100; $i++){
                if($i%2 == 0){
                    $x += $i;
                }
            }
            echo $x;
            */

            /* --- 4* ---
            * Esta solução utiliza um recurso chamado 'recursão' onde uma função
            * invoca ela mesma dentro de seu bloco de código. A idéia neste algoritmo
            * é ir chamando recursivamente a mesma função até atingir o valor 1,
            * pois fatorial de 1 retorna 1 mesmo, e a partir deste retorno ir somando
            * com os demais retornos das invocações anteriores.

            function fatorial($x){
                if($x == 1)
                    return 1;
                else
                    return $x * fatorial($x - 1);
            }
            echo fatorial(4);

            */

            /* --- 5* ---
            function calculamedia($nota1, $nota2, $nota3, $peso1, $peso2, $peso3){
                $z = (($nota1 / 10)*$peso1 ) + (($nota2 / 10)* $peso2) + (($nota3 / 10)* $peso3);
                return $z;
            }
            echo calculamedia(10,9,8,3,2,5);
            */

            /* --- 6* ---
            * Para implementar a f�rmula de fibonacci novamente foi utilizado o recurso
            * de 'recurs�o' na constru��o da fun��o em quest�o.

            function fibonacci ($i){
                if($i < 2)
                    return $i;
                else
                    return fibonacci($i - 1) + fibonacci($i - 2);
                    ----------------   F2 --------------- F1 ---------
            }

            for($i = 0; $i <= 10; $i++){
                echo fibonacci($i) . " ";
            }
            */

            /* --- 7* ---
            function soma($x, $y){
                $z = 0;
                for($x; $x <= $y; $x++){
                    $z += $x;
                }
                return $z;
            }
            echo soma(5, 10);
            */


            /* --- 8* ---

            $x = 13;
            if($x % 2 == 0){
                $y = $x / 2;
            } else {
                $y = 3 * $x + 1;
            }
            echo $y;

            switch ($x % 2){
                case 0:
                    $y = $x / 2;
                    break;
                default:
                    $y = 3 * $x + 1;
            }
            echo $y;

            */

        ?>
    </body>
</html>
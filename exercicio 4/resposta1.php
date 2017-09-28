<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Resposta 1</title>
    </head>
    <body>
        <?php


            //------------------------------1-------------------------------
            function mediadearray($notas, $pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }

            echo mediadearray(array(7,8,10), array(2, 3, 5));
            echo "<br><br>";

            //------------------------------2-------------------------------
            function media($notas, $pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }
            echo mediadearray(array(7,8,10), array(2,3,5));
            echo "<br><br>";

            //------------------------------3-------------------------------
            function m ($notas, $pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }
            echo m(array(7,8,10), array(2,3,5));
            echo "<br><br>";

            //------------------------------4--------------------------------
            function med ($notas,$pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }
            echo med(array(7,8,10), array(2,3,5));
            echo"<br><br>";

            //------------------------------5--------------------------------
            function medi($notas, $pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }

            echo medi(array(7,8,10), array(2,3,5));
            echo "<br><br>";

            //-------------------------------6--------------------------------
            function mediad($notas, $pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }
            echo mediad(array(7,8,10), array(2,3,5));
            echo "<br><br>";

            //-------------------------------7------------------------------------
            function mediade($notas, $pesos){
                $resultado = 0;
                for($x = 0; $x<sizeof($notas); $x++){
                    $resultado += $notas[$x]/10 * $pesos[$x];
                }
                return $resultado;
            }
            echo mediade(array(7,8,10), array(2,3,5));
            echo "<br><br>";

            /*
             * Função feita para calcular um tipo de média;
             * */

        ?>
    </body>
</html>
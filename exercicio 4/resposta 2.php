<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Resposta 2</title>
    </head>
    <body>
        <?php

            function invertearray($array){
                $novoarray = array();
                for($x = sizeof($array) - 1; $x >= 0; $x--){
                    $novoarray[sizeof($array) - 1 - $x] = $array[$x];
                }
                return $novoarray;
            }
            print_r(invertearray(array("a", "b", "c", "d")));
            echo "<br><br>";

            functin

        ?>
    </body>
</html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Array</title>
    </head>
    <body>

        <?php

            $arrayexemplo = array("Php", "SQL", 100, "Assemble");
            print_r($arrayexemplo);
            echo "<br><br>";

            //---------------------------------------------------------

            unset($arrayexemplo[1]);
            print_r($arrayexemplo);
            echo "<br><br>";

            //---------------------------------------------------------

            $arrayexemplo = array("Php", "SQL", 100, "Assemble");
            echo sizeof($arrayexemplo) . "<br>";
            echo count($arrayexemplo) . "<br><br>";

            //---------------------------------------------------------

            foreach ($arrayexemplo as $key){
                echo "Tem no array: " . $key . "<br>";
             }
             echo"<br>";

            //---------------------------------------------------------

            $x = array_push($arrayexemplo, "Kauan");
            print_r($arrayexemplo);
            echo "<br>";

            $x = array_pop($arrayexemplo);
            echo $x . "<br>";
            print_r($arrayexemplo);
            echo"<br><br>";

            //----------------------------------------------------------

            array_unshift($arrayexemplo, "Kauan");
            print_r($arrayexemplo);
            echo "<br>";

            array_shift($arrayexemplo);
            print_r($arrayexemplo);
            echo"<br><br>";

            //-----------------------------------------------------------

            function inseremoeda($valor){
                return "R$: " . $valor;
            }

            $arrayexemplo = array_map("inseremoeda", $arrayexemplo);
            print_r($arrayexemplo);
            echo "<br><hr>";

            //------------------------------------------------------------

            echo array_key_exists("1", $arrayexemplo) . "<br><hr>";

            $keys = array_keys($arrayexemplo);
            foreach($keys as $key){
                echo $key . " ";
            }
            echo "<br><br>";

            //------------------------------------------------------------

            $arrayexemplo = array(
                "Linguagem1" => "PHP", "Linguagem2" => "Java",
                "Linguagem3" => "Python", "Linguagem" => "JavaScript"
            );

            $key = array_search("PHP", $arrayexemplo);
            echo $key . "<br>";

            $key = in_array("Python" ,$arrayexemplo);
            echo $key . "<br>";

            //-------------------------------------------------------------

            shuffle($arrayexemplo);
            print_r($arrayexemplo);
            echo "<br>";

            sort($arrayexemplo);
            print_r($arrayexemplo);
            echo "<br>";

            rsort($arrayexemplo);
            print_r($arrayexemplo);
            echo "<br>";

        ?>

    </body>
</html>
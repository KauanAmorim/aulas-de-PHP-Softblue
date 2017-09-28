<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

            $arrayExemplo = array(0 => "Php", 1 => "SQL", 5 => 100, "Curso" => "Java");
            print_r($arrayExemplo);
            echo "<br><br>";

            echo "Posição 0: ".$arrayExemplo[0] . "<br>";
            echo "Posição 1: ".$arrayExemplo[1] . "<br>";
            echo "Posição 5: ".$arrayExemplo[5] . "<br>";
            echo "Posição 'Curso': ".$arrayExemplo["Curso"] . "<br>";

            unset($arrayExemplo["Curso"]);
            print_r($arrayExemplo);
            echo"<br><br>";

            echo count($arrayExemplo) . "<br><br>";
            echo sizeof($arrayExemplo) . "<br><br>";

            foreach($arrayExemplo as $key){
                echo "Tem no array: " . $key . ", ";
            }
            echo "<br><br>";

            array_push($arrayExemplo, "Kauan");
            print_r($arrayExemplo);
            echo "<br><br>";

            $x = array_pop($arrayExemplo);
            echo $x . "<br>";
            print_r($arrayExemplo);
            echo "<br><br>";

            $x = array_shift($arrayExemplo);
            echo $x . "<br>";
            print_r($arrayExemplo);
            echo "<br><br>";

            array_unshift($arrayExemplo, "Amorim");
            print_r($arrayExemplo);
            echo "<br><br>";


            $arrayExemplo = array(140.1, 200, 215.05, 550);
            print_r($arrayExemplo);
            echo "<br><br>";

            function inseremoeda($valor){
                $valor = "R$: " . $valor;
                return $valor;
            }

            $arrayExemplo = array_map("inseremoeda", $arrayExemplo);
            print_r($arrayExemplo);
            echo "<br><br>";



            $arrayExemplo = array("Linguagem1" => "PHP",
                "Linguagem2" => "SQL", "Linguagem3" => 100,
                "Linguagem4" => "Java");
            print_r($arrayExemplo);
            echo "<br><br>";

            if(array_key_exists("Linguagem2", $arrayExemplo)){
                echo "Existe Linguagem2 no Array <br><br>";
            } else {
                echo "Não existe Linguagem2 no Array <br><br>";
            }

            if(array_key_exists("Linguagem70", $arrayExemplo)){
                echo "Existe Linguagem70 no Array <br><br>";
            }else {
                echo "Não existe Linguagem70 no Array <br><br>";
            };

            $keys = array_keys($arrayExemplo);
            foreach($keys as $key){
                echo $key . " ";
            }
            echo "<br><br>";


            $key = array_search("PHP", $arrayExemplo);
            echo "Chave do elemento 'PHP' é: " . $key . "<br><br>";

            $isin = in_array("PHP", $arrayExemplo);
            if($isin){
                echo "Elemento existe no Array! <br><br>";
            } else{
                echo "Elemento não existe no Array! <br><br>";
            }

            $isin = in_array("PYTHON", $arrayExemplo);
            if($isin){
                echo "Elemento existe no Array! <br><br>";
            } else{
                echo "Elemento não existe no Array! <br><br>";
            }

            print_r($arrayExemplo);
            echo "<br>";
            shuffle($arrayExemplo);
            print_r($arrayExemplo);
            echo "<br>";
            sort($arrayExemplo);
            print_r($arrayExemplo);
            echo "<br>";
            rsort($arrayExemplo);
            print_r($arrayExemplo);
            echo "<br><br>";


            $stringExemplo = "var1=natação&var2=basquete&teste=futebol";
            parse_str($stringExemplo, $arrayResultado);
            echo $stringExemplo;
            echo "<br>";
            print_r($arrayResultado);
            echo "<br><br>";

            $stringExemplo = "10;20;30;40;50";
            $arrayExemplo = explode(";" ,$stringExemplo);
            print_r($arrayExemplo);
            echo "<br><br>";

            $arrayExemplo = array("a", "b", "c", "d", "e");
            $stringExemplo = implode(";", $arrayExemplo);
            echo $stringExemplo;





            //Echo "A Softblue tem diversos cursos na área de programação, entre eles estão:";
            /*foreach($arrayExemplo as $key){
                echo $key . " ";
            }*/



        ?>
    </body>
</html>
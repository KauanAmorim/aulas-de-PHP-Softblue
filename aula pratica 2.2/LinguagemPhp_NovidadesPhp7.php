<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        echo "Iniciando o arquivo <br>";

        try {
            mysql_connect("localhost");
        }
        catch(Error $e){
            echo "Houve uma falha <br>" . $e -> getMessage() . "<br>";
        }

        echo "Finalizando o arquivo <br>";

        // Operador spaceship <=>

        $x = "b" <=> "a";
        echo $x . "<br>";

        $x = "b" <=> "b";
        echo $x . "<br>";

        $x = "b" <=> "c";
        echo $x . "<br>";

        switch($x){

            case-1:
                echo "É menor/anterior<br>";
                break;

            case 0:
                echo "É igual<br>";
                break;

            case 1:
                echo "É maior/posterior<br>";
                break;
        }

        // Operador ??

        $x = Null;

        if(isset($x) == TRUE){
            $y = $x;
        }
        else {
            $y = "Valor alternativo";
        }
        echo $y . "<br>";

        $z = $x ?? "Valor alternatico";
        echo $z . "<br>";

        $meuarray = array('a','b','c','d');

        foreach($meuarray as $valor){
            echo($valor . '<br>');
        }

        ?>
    </body>
</html>
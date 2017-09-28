<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

            $filepath = "C:/temp/teste.txt";

            /*
            if(is_file($filepath)){
                echo "O arquivo existe! <br>";
            } else {
                echo "O arquivo não existe <br>";
            }

            $meuarquivo = fopen($filepath, "a+");
            fwrite($meuarquivo, "Softblue");
            fwrite($meuarquivo, " - Cursos online");
            fwrite($meuarquivo, "\r\n");
            fclose($meuarquivo);

            if(is_file($filepath)){
                echo "O arquivo existe! <br>";
            } else {
                echo "O arquivo não existe! <br>";
            }
            */

            $meuarquivo = fopen($filepath, "r");

            $buffer = fread($meuarquivo, 10);
            echo $buffer . "<br>";

            $buffer = fread($meuarquivo, 10);
            echo $buffer . "<br>";

            $buffer = fread($meuarquivo, 10);
            echo $buffer . "<br>";

            fclose($meuarquivo);

            echo "<br><br>";

            $meuarquivo = fopen($filepath, "r");
            $buffer = fread($meuarquivo, filesize($filepath));
            echo utf8_encode($buffer) . "<br>";
            fclose($meuarquivo);

            echo "<BR><BR>";

            $meuarray = file($filepath);
            foreach ($meuarray as $key){
                echo "Linha do arquivo: " . utf8_encode($key) . "<br>";
            }
            //Quando aberto via FILE não há a necessidade de FCLOSE.

            echo "<br><br>";

            $dir = opendir("C:/");
            echo readdir($dir) . "<br>";
            echo readdir($dir) . "<br>";
            echo readdir($dir) . "<br>";
            echo readdir($dir) . "<br>";
            echo readdir($dir) . "<br>";
            closedir($dir);



        ?>

    </body>
</html>
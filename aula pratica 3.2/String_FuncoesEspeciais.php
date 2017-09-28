<html lang="pt-br">
    <head>
        <meta charset="utf-8"
        <title></title>
    </head>
    <body>
        <?php

            $strExemplo = "Frase composta de exemplo para aula.";

            // ECHO e PRINT tem a mesma funcionalidade e ambos podem utilizar com e sem parenteses.

            echo ($strExemplo . "<br>");
            echo $strExemplo . "<br>";

            print ($strExemplo . "<br>");
            print $strExemplo . "<br>";

            //----------------------------------------------------------------------

            /* A diferença entre o comando que tem utf8_decode e o que não tem
               é que o utf8_decode é utilizado para caso a frase possua caracteres especiais
               pois o strlen conta bits e não caracteres, então ele vê como um caractere amais
               e uma sentença que seria de 36 caracteres, se tornaria de 37 por causa do caractere especial
               portanto o utf8_decode ajuda a resolver esse problema.
             */

            //Acentos e caracteres especiais: utilize o utf8_decode.

            $x = strlen($strExemplo);
            echo $x . "<br>";

            $x = strlen(utf8_decode($strExemplo));
            echo $x . "<br>";

            //-----------------------------------------------------------------------

            /* Para procura a posição de uma string, é utilizado a função strpos,
               porém para ir procurando a mesma string em outras posições, você pode definir o ponto de partida
               como no exemplo 2, e para não ficar repetindo o código, utiliza-se laços de repetição como no exemplo 3
             * */

            // Exemplo1
            $x = strpos($strExemplo, "a");
            echo $x . "<br>";

            //Exemplo 2
            $x = strpos($strExemplo, "a", 3);
            echo $x . "<br>";

            //Exemplo 3
            $posicao = strpos($strExemplo, "a");
            while($posicao !== FALSE){
                echo "Posição: " . $posicao . "<br>";
                $posicao = strpos($strExemplo, "a", $posicao+1);
            }

            //-------------------------------------------------------------------------------

            // só quer imprimir parte da string, então a função strchr é necessária para isso.
            // o ponto de partido fica entre as aspas " ";

            $x = strchr($strExemplo, " ");
            echo $x . "<br>";
            // Resultado: composta de exemplo para aula.

            //ponto de partida na palavra "de" da string.

            $x = strchr($strExemplo, "de");
            echo $x . "<br>";
            //Resultado: de exemplo para aula.

            // caso queira que a busca seja da direita para a esquerda, utiliza-se o comando strrchr.
            // os comandos tem as mesmas funcionalidade do exemplo anterios, porém com resultado de trás para frente.

            $x = strrchr($strExemplo, " ");
            echo $x ."<br>";
            //Resultado: aula.

            $x = strrchr($strExemplo, "de");
            echo $x . "<br>";
            //Resultado: de exemplo para aula.

            // Para buscar a partir de numero de posições utiliza-se o substr.

            $x = substr($strExemplo, 4);
            echo $x . "<br>";
            //Resultado: e composta de exemplo para aula.

            //Para procurar um determinado numero de elementos apartir do ponto de partida, segue o próximo exemplo.

            $x = substr($strExemplo, 4, 10);
            echo $x . "<br>";
            //Resultado: e composta.

            //-------------------------------------------------------------------------------

            //IMPORTANTE: é sempre bom atribuir para uma variavel como a $x que estamos utilizando nos exemplos.
            // str_replace, utilizada para substituir strings ou parte delas.

            $x = str_replace("composta", "criada", $strExemplo);
            echo $x . "<br>";
            //Resultado: Frase criada de exemplo para aula.

            //--------------------------------------------------------------------------------

            //Código da tabela ASCII, tem no drive;

            $x = chr(65);
            echo $x . "<br>";

            //---------------------------------------------------------------------------------
            // funções para deixar a frase com as palavras minusculas(strtolower) ou maiusculas(strtoupper).

            // Com issa str_replace faz com que o exemplo da strtolower tenha mais sentido visualmente.
            $x = str_replace("Frase composta de exemplo para aula", "FRASE COMPOSTA DE EXEMPLO PARA AULA",
                $strExemplo);
            echo $x . "<br>";

            $x = strtolower($strExemplo);
            echo $x . "<br>";

            $x = strtoupper($strExemplo);
            echo $x . "<br>";

            // Utiliza-se para deixar a primeira letra da primeira palavra maiúscula.
            $x = ucfirst($strExemplo);
            echo $x . "<br>";

            // Utiliza-se para deixar a primeira letra de todas as paravras maiuscula, com exceção, se a palavra,
            // tiver caracteres especiais.

            $x = ucwords($strExemplo);
            echo $x . "<br>";

            //Função que imprime na tela a frase ao contrário.

            $x = strrev($strExemplo);
            echo $x . "<br>";

            //-----------------------------------------------------------------------------------------

            $x = trim($strExemplo);
            $x = str_replace(" ", "_", $x);
            echo $x . "<br>";

            $x = ltrim($strExemplo);
            $x = str_replace(" ", "_", $x);
            echo $x . "<br>";

            $x = rtrim($strExemplo);
            $x = str_replace(" ", "_", $x);
            echo $x . "<br>";

            // para resolver os espaços em branco no meio, utiliza laços de repetição ou str_replace.

            $x = trim($strExemplo);
            $x = str_replace("  ", "_", $x);
            echo $x . "<br>";

            $x = str_split($strExemplo, 5);
            echo $x[0] . "<br>";
            echo $x[1] . "<br>";
            echo $x[2] . "<br>";
            echo $x[3] . "<br>";
            echo $x[4] . "<br>";
            echo $x[5] . "<br>";
            echo $x[6] . "<br>";
            echo $x[7] . "<br>";

            $x = explode(" ", $strExemplo);
            echo $x[0] . "<br>";
            echo $x[1] . "<br>";
            echo $x[2] . "<br>";
            echo $x[3] . "<br>";
            echo $x[4] . "<br>";
            echo $x[5] . "<br>";

            //---------------------------------------------------------------------------------------
            //Criptografia

            //IMPORTANTE: colocar sementes em todas as funções de criptografia ou só quando necessário.
            // sha1 e md5 famosos e criptografam até arquivos.
            // da paraz criar palavras secretas conhecidas como sementes nessas funções assim como o exemplo 3.
            // essas sementes ajudam para que não consigam descriptografam a função, pois existem sites que descriptografam,
            // sem as semente e só com a função crua.



            //exemplo 1
            $x = sha1($strExemplo);
            echo $x . "<br>";

            //exemplo 2
            $x = md5($strExemplo);
            echo $x . "<br>";


            // quando tem uma palavra secreta, a criptografia fica fixa, mas se não tem, ela muda a todo F5.
            // obs: quando esse comando não tem uma palavra secreta, e tem a mesma palavra criptografada por,
            // outras funções, essas mesmas funções resultam em erro.

            //exemplo 3
            $x = crypt($strExemplo, "kauan");
            echo $x . "<br>";


        ?>
    </body>
</html>
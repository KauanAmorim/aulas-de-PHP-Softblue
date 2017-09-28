<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <?php

    // Exercicio 1

        function capitaliza ($string) {

            for($x = 0; $x <strlen($string); $x++){
                if($x == 0){
                    $string = strtoupper(substr($string, 0, 1)) . substr($string, 1);
                    // --------- maiusculo primeira letra da palavra ---------- da posição 1 para frente ------
                    /*
                     Aqui na primeira ação srttoupper, coloca a letra da string maiuscula da posição 0 com tramanho de 1 elemento
                     Na segunda ação substr, coloca a substr começar da posição 1 pois já que a posição 0 foi modificada, não precisa
                     mexer em mais nada e colocar para capturar da posição 1 para frente.
                    */
                }
                else {
                        if(substr($string, $x-1, 1) == " ") {
                            /*
                                verificar se a posição anterior tem espaço em branco, se tiver, a ação logo abaixo será executada.
                            */
                            $string = substr($string, 0, $x) . strtoupper(substr($string, $x, 1)) . substr($string, $x+1);
                            /*
                                a primeira ação é capturar a string da posição 0 ao tamanho da variavel x,
                                na segunda, colocar a letra da posição da variavel x em maiusculo e
                                na terceira, capturar para frente.
                            */

                    }
                }
            }
            return $string;

        }

        echo capitaliza("exemplo de string para ser capitalizada");
        //----------------------012345678901234567890123456789012345678
        //-------------------------------10--------20--------30------------
        echo "<br><br>";

    //--------------------------------------------------------------------------------------------------------------------------------








    ?>
</body>
</html>
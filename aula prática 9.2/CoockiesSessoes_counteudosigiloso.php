<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sessão e Coockies: Conteúdo Sigiloso</title>
    </head>
    <body>


    <?php

        session_start();

        if(!isset($_SESSION["usuario"]))
        {
            echo "Erro";
            exit();
        } else {
            echo "Olá " . $_SESSION["usuario"];
            echo "<br><br>";
        }

    ?>


    [Conteúdo privado /Sigiloso]


    </body>
</html>
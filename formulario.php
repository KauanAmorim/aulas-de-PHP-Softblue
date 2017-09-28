<?php

    $erro = null;
    $valido = false;

    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
    {
        if(strlen(utf8_decode($_POST["nome"])) < 5)
        {
            $erro = "Preencha o campo nome corretamente";
        }
        elseif(strlen(utf8_decode($_POST["email"])) < 6)
        {
            $erro = "Preencha o campo email corretamente";
        }
        elseif(is_numeric($_POST["idade"]) == false)
        {
            $erro = "Preencha o campo idade corretamente";
        } else {
            $valido = true;
        }
    }

?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulário</title>
    </head>
    <body>

        <?php

            if($valido == true) {
                echo "Dados enviados com sucesso!";
            } else {

                if(isset($erro)) {
                    echo $erro . "<br><br>";
                }

        ?>

        <form method="post" action="?validar=true">

                nome: <input type="text" name="nome"><br>

                email: <input type="email" name="email"><br>

                idade: <input type="number" name="idade"><br>

                <input type="submit" value="Enviar">

        </form>


        <?php }?>
    </body>
</html>
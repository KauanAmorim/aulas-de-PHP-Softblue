<?php

    $erro = null;
    $valido = false;

    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
    {
        if(strlen(utf8_decode($_POST["nome"])) < 5)
        {
            $erro = "Preencha o campo nome corretamente (5 ou mais caracteres)";
        }
        elseif(strlen(utf8_decode($_POST["email"])) < 6)
        {
            $erro = "Preencha o campo email corretamente (6 ou mais caracteres)";
        }
        elseif(is_numeric($_POST["idade"]) == false && $_POST["idade"] < 18)
        {
            $erro = "Preencha o campo idade corretamente (Para maiores de 18 anos ( ͡° ͜ʖ ͡°))";
        }
        elseif($_POST["sexo"] != "F" && $_POST["sexo"] != "M")
        {
            $erro = "Preencha o camo sexo corretamento ou que porra tu é?";
        }
        else{
            $valido = true;
        }
    }


?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <body>

        <?php

            if($valido == true)
            {
                echo "Sucesso! <BR>";

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $idade = $_POST["idade"];
                $sexo = $_POST["sexo"];

                echo "Bem vindo: " . $nome . " irei mostrar sua informações abaixo.<br>";
                echo "Estão corretas as seguntes informações? <br>";
                echo "Nome: " . $nome . "<br>";
                echo "Idade: " . $idade . "<br>";
                echo "E-mail: " . $email . "<br>";
                echo "Sexo: " . $sexo . "<br>";

                echo "senão estiver correto clique no link <br> <a href='teste.php'>Tem um erro aqui</a>";

            } else{

                if(isset($erro)){
                    echo $erro . "<br><br>";
                }

        ?>

        <form method="post" action="?validar=true">

            <label>Nome:</label><input type="text" name="nome"><br>

            <label>Email:</label><input type="email" name="email"><br>

            <label>Idade:</label><input type="number" name="idade" max="70" min="0"><br>

            <label>Sexo:</label><input type="radio" name="sexo" value="F">Feminino
                                <input type="radio" name="sexo" value="M">Masculino<br>

            <input type="submit" value="Enviar">

        </form>

        <?php } ?>
    </body>
</html>
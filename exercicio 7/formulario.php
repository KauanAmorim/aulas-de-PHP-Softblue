<?php

$erro = null;
$valido = false;

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
{
    if(strlen(utf8_decode($_POST["nome"])) < 5)
    {
        $erro = "Preencha o campo nome corretamente";
    }
    else if(is_numeric($_POST["idade"]) == false)
    {
        $erro = "Preencha o campo idade corretamente";
    }
    else if(strlen(utf8_decode($_POST["email"])) < 6)
    {
        $erro = "Preencha o campo E-mail corretamente";
    }
    else if($_POST["sexo"] != "M" && $_POST["sexo"] != "F")
    {
        $erro = "Selecione um sexo";
    }
    else if($_POST["estadocivil"] != "Solteiro(a)" &&
            $_POST["estadocivil"] != "Casado(a)" &&
            $_POST["estadocivil"] != "Divorciado(a)")
    {
        $erro = "Selecione um estado civil";
    }
    else {
        $valido = true;
    }
}

?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exercicio 7: Resposta</title>
    </head>
    <body>

        <?php

            if($valido == true){
                echo "Dados enviados com sucesso!(Parabéns, exercicio 7 completo!)";
            }else{

                if(isset($erro)){
                    echo $erro;
                }

        ?>

            <form method="post" action="?validar=true">

                <!------------------------------------------------------------------------------------------------------->

                nome:
                <input type="text" name="nome" placeholder="Digite seu nome aqui"
                    <?php
                        if(isset($_POST["nome"])){
                            echo "value='" . $_POST["nome"] . "'";
                        }
                    ?>
                ><br><hr>


                <!------------------------------------------------------------------------------------------------------->

                idade:
                <input type="number" name="idade" placeholder="Digite sua idade aqui" min="1" max="99"
                    <?php
                        if(isset($_POST["idade"])){
                            echo "value='" . $_POST["idade"] . "'";
                        }
                    ?>
                ><br><hr>

                <!------------------------------------------------------------------------------------------------------->

                E-mail:
                <input type="email" name="email" placeholder="Digite seu E-mail aqui"
                    <?php
                        if(isset($_POST["email"])){
                            echo "value='" . $_POST["email"] . "'";
                        }
                    ?>
                ><br><hr>

                <!------------------------------------------------------------------------------------------------------->

                Sexo:
                <input type="radio" name="sexo" value="M"
                    <?php
                        if(isset($_POST["sexo"]) && $_POST["sexo"] == "M"){
                            echo "checked";
                        }
                    ?>
                > Masculino

                <input type="radio" name="sexo" value="F"
                    <?php
                        if(isset($_POST["sexo"]) && $_POST["sexo"] == "F"){
                            echo "checked";
                        }
                    ?>
                > Feminino
                <br><hr>

                <!------------------------------------------------------------------------------------------------------->

                Interesse:<br>
                <input type="checkbox" name="PHP"
                    <?php
                        if(isset($_POST["PHP"])){
                            echo "checked";
                        }
                    ?>
                > PHP <br>

                <input type="checkbox" name="Java"
                    <?php
                        if(isset($_POST["Java"])){
                            echo "checked";
                        }
                    ?>
                > Java <br>

                <input type="checkbox" name="Python"
                    <?php
                        if(isset($_POST["Python"])){
                            echo "checked";
                        }
                    ?>
                > Python <br><hr>

                <!------------------------------------------------------------------------------------------------------->

                Estado civil:
                <select name="estadocivil">

                    <option>Selecione...</option>

                    <option
                        <?php
                            if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Solteiro(a)"){
                                echo "selected";
                            }
                        ?>
                    >Solteiro(a)</option>

                    <option
                        <?php
                            if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Casado(a)"){
                                echo "selected";
                            }
                        ?>
                    >Casado(a)</option>

                    <option
                        <?php
                            if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divorciado(a)")
                        ?>
                    >Divorciado(a)</option>

                </select> <br><hr>

                <!------------------------------------------------------------------------------------------------------->

                Senha:
                <input type="password" name="senha"><br><hr>

                <!------------------------------------------------------------------------------------------------------->

                <input type="submit" vlaue="Enviar">


            </form>
        <?php } ?>

    </body>
</html>

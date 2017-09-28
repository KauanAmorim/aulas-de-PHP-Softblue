<?php

//2°PASSO

    $erro = null;
    $valido = false;

    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
    {
        if(strlen(utf8_decode($_POST["nome"])) < 5)
        {
            $erro = "Preencha o campo corretamente (5 ou mais caracteres).";
        }
        else if(strlen(utf8_decode($_POST["email"])) < 6)
        {
            $erro = "E-mail inválido, preencha corretamente.";
        }
        else if(is_numeric($_POST["idade"]) == false)
        {
            $erro = "Campo idade deve ser numerico";
        }
        else if($_POST["sexo"] != "M" && $_POST["idade"] != "F")
        {
            $erro = "Selecione o campo sexo corretamente";
        }
        else if($_POST["estadocivil"] != "Solteiro(a)" &&
                $_POST["estadocivil"] != "Casado(a)" &&
                $_POST["estadocivil"] != "Divociado(a)" &&
                $_POST["estadocivil"] != "Viuvo(a)")
        {
            $erro = "Selecione o campo estado civil corretamente.";
        }
        else
        {
            $valido = true;
        }
    }

?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulários: Avançado</title>
    </head>
    <body>

        <?php

        // 3°PASSO

            if($valido == true){
                echo "Dados enviados com sucesso!";
            } else {

            if(isset($erro)){
                echo $erro . "<br><br>";
            }

        ?>

        <form method="post" action="?validar=true">

            <!------------------------------------------------------------------------------------------------------->

            nome:
            <input type="text" name="nome"
                <?php
                    if(isset($_POST["nome"])){
                        echo "value='" . $_POST["nome"] . "'";
                    }
                ?>
            ><br>

            <!------------------------------------------------------------------------------------------------------->

            E-mail:
            <input type="email" name="email"
                <?php
                    if(isset($_POST["email"])){
                        echo "value='" . $_POST["email"] . "'";
                    }
                ?>
            ><br>

            <!------------------------------------------------------------------------------------------------------->

            Idade:
            <input type="number" name="idade"
                <?php
                    if(isset($_POST["idade"])){
                        echo "value='" . $_POST["idade"] . "'";
                    }
                ?>
            ><br>

            <!------------------------------------------------------------------------------------------------------->

            Sexo:
            <input type="radio" name="sexo" value="M"
                <?php
                    if(isset($_POST["sexo"]) && $_POST["sexo"] == "M"){
                        echo "checked";
                    }
                ?>
            >Masculino

            <input type="radio" name="sexo" value="F"
                <?php
                    if(isset($_POST["sexo"]) && $_POST["sexo"] == "F"){
                        echo "checked";
                    }
                ?>
            >Feminino
            <br>

            <!------------------------------------------------------------------------------------------------------->

            Interesse:
            <input type="checkbox" name="humanas"
                <?php
                    if(isset($_POST["humanas"])){
                        echo "checked";
                    }
                ?>
            >Ciências Humanas


            <input type="checkbox" name="exatas"
                <?php
                    if(isset($_POST["exatas"])){
                        echo "checked";
                    }
                ?>
            >Ciências Exatas

            <input type="checkbox" name="biologicas"
                <?php
                    if(isset($_POST["biologicas"])){
                        echo "checked";
                    }
                ?>
            >Ciências Biológicas
            <br>

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
                        if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divorciado(a)"){
                            echo "selected";
                        }
                    ?>
                >Divorciado(a)</option>

                <option
                    <?php
                        if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Viuvi(a)"){
                            echo "selected";
                        }
                    ?>
                >Viuvo(a)</option>

            </select><br>

            <!------------------------------------------------------------------------------------------------------->

            Senha:
            <input type="password" name="senha"><br>

            <!------------------------------------------------------------------------------------------------------->

            <input type="submit" value="Enviar">

            <!------------------------------------------------------------------------------------------------------->

        </form>
        <?php } ?>
    </body>
</html>

<!-- 1° Passo: Fazer o formulário -->
<!-- 2° Passo: Validar o formulário-->
<!-- 3° Passo: Setar informações-->
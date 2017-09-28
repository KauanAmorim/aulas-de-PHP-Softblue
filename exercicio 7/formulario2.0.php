<?php

$erro = null;
$valido = false;
$erroA = 0;

    //------------------------------------------------------------------------------------------------------->


    if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
    {

        if(isset($_FILES["campoarquivo"]))
        {
            $arquivonome = $_FILES["campoarquivo"]["name"];
            $arquivotipo = $_FILES["campoarquivo"]["type"];
            $arquivotamanho = $_FILES["campoarquivo"]["size"];
            $arquivonometemp = $_FILES["campoarquivo"]["tmp_name"];
            $erroA = $_FILES["campoarquivo"]["error"];

            if($erroA == 0)
            {
                if(is_uploaded_file($arquivonometemp))
                {
                    if(move_uploaded_file($arquivonometemp, "uploads/".$arquivonome))
                    {
                        echo "Sucesso!! <br>";

                        echo "Nome:" . $arquivonome . "<br>";
                        echo "Tipo" . $arquivotipo . "<br>";
                        echo "Tamanho: " . $arquivotamanho . "<br>";
                        echo "Nome temporário: " . $arquivonometemp . "<br>";
                    }
                    else{
                        $erroA = "Falha ao mover arquivo (permissão de acesso, caminho inválido)";
                    }
                }
                else{
                    $erroA = "Erro no envio: arquivo não recebido com sucesso.";
                }
            }
            else{
                $erroA = "Erro no envio: " . $erroA;
            }
        }
        else{
            $erroA = "Arquivo enviado não encontrado.";
        }

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
        } else if($_POST["sexo"] != "M" && $_POST["sexo"] != "F")
        {
            $erro = "Selecione um sexo";
        }
        else if($_POST["estadocivil"] != "Solteiro(a)" &&
            $_POST["estadocivil"] != "Casado(a)" &&
            $_POST["estadocivil"] != "Divorciado(a)") {
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
        <title></title>
    </head>
    <body>

        <?php
            if($valido == true){
                echo "Exercicio 7 completo!! <br>";
            }
            else {

                if(isset($erro)){
                    echo $erro . "<br>";
                }
                if ($erroA !== 0){
                    echo $erroA . " Não se esqueça de colocar o arquivo" . "<br>";
                }

        ?>

            <form enctype="multipart/form-data" method="post" action="?validar=true">

                <!------------------------------------------------------------------------------------------------------->

                Nome:
                <input type="text" name="nome" placeholder="Seu nome"
                    <?php
                        if(isset($_POST["nome"])){
                            echo "value='" . $_POST["nome"] . "'";
                        }
                    ?>
                ><br><br>

                <!------------------------------------------------------------------------------------------------------->

                Idade:
                <input type="number" name="idade" min="10" max="99" placeholder="idade"
                    <?php
                        if(isset($_POST["idade"])){
                            echo "value='" . $_POST["idade"] . "'";
                        }
                    ?>
                ><br><br>

                <!------------------------------------------------------------------------------------------------------->

                E-mail:
                <input type="email" name="email" placeholder="seu E-mail"
                    <?php
                        if(isset($_POST["email"])){
                            echo "value='" . $_POST["email"] . "'";
                        }
                    ?>
                ><br><br>

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
                <br><br>

                <!------------------------------------------------------------------------------------------------------->

                Interesse:<br>
                <input type="checkbox" name="java"
                    <?php
                        if(isset($_POST["java"])){
                            echo "checked";
                        }
                    ?>
                > Java <br>

                <input type="checkbox" name="php"
                    <?php
                        if(isset($_POST["php"])){
                            echo "checked";
                        }
                    ?>
                > PHP <br>

                <input type="checkbox" name="python"
                    <?php
                        if(isset($_POST["python"])){
                            echo "checked";
                        }
                    ?>
                > Python <br><br>

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
                    >Solteiro(a)</option><br>

                    <option
                        <?php
                            if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Casado(a)"){
                                echo "selected";
                            }
                        ?>
                    >Casado(a)</option><br>

                    <option
                        <?php
                            if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divorciado(a)"){
                                echo "selected";
                            }
                        ?>
                    >Divorciado(a)</option><br>

                </select><br><br>

                <!------------------------------------------------------------------------------------------------------->

                Arquivo:
                <input type="file" name="campoarquivo"><br><br>

                <!------------------------------------------------------------------------------------------------------->

                Senha:
                <input type="password" name="senha"><br><br>

                <input type="submit" value="Enviar">

            </form>

        <?php } ?>

    </body>
</html>
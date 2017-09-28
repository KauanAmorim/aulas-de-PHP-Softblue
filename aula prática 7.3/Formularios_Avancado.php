<?php

$erro = null;
$valido = false;

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
{
    if(strlen(utf8_decode($_POST["nome"])) < 5)
    {
        $erro = "Preencha o campo nome corretamente.";
    }
    elseif(strlen($_POST["email"]) < 6)
    {
        $erro = "Preencha o campo E-mail corretamente.";
    }
    elseif (is_numeric($_POST["idade"]) == false)
    {
        $erro = "O preencha o campo idade corretamente";
    }
    elseif($_POST["sexo"] != "M" && $_POST["sexo"] != "F")
    {
        $erro = "Nenhum tipo de sexo selecionado";
    }
    elseif($_POST["estadocivil"] != "Solteiro(a)" &&
            $_POST["estadocivil"] != "Casado(a)" &&
            $_POST["estadocivil"] != "Divociado(a)" &&
            $_POST["estadocivil"] != "Viuvo(a)")
    {
        $erro = "Marque seu estado civil";
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
            echo "Dados enviados com sucesso";
        } else{

            if(isset($erro)){
                echo $erro . "<br><br>";
            }

    ?>

        <form method="post" action="?validar=true">

            <!------------------------------------------------------------------------------------------------------->

            Nome:
            <input type="text" name="nome"
                <?php
                    if(isset($_POST["nome"])){
                        echo "value='" . $_POST["nome"] . "'";
                    }
                ?>
            >
            <br>

            <!------------------------------------------------------------------------------------------------------->

            E-mail:
            <input type="email" name="email"
                <?php
                    if(isset($_POST["email"])){
                        echo "value='" . $_POST["email"] . "'";
                    }
                ?>
            >
            <br>

            <!------------------------------------------------------------------------------------------------------->

            Idade:
            <input type="number" name="idade" min="10" max="99"
                <?php
                    if(isset($_POST["idade"])){
                        echo "value='" . $_POST["idade"] . "'";
                    }
                ?>
            >
            <br>

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
            > Ciências Humanas

            <input type="checkbox" name="exatas"
                <?php
                    if(isset($_POST["exatas"])){
                        echo "checked";
                    }
                ?>
            > Ciências Exatas

            <input type="checkbox" name="biologicas"
                <?php
                    if(isset($_POST["biologicas"])){
                        echo "checked";
                    }
                ?>
            > Ciências biológicas
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
                        if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divociado(a)"){
                            echo "selected";
                        }
                    ?>
                >Divociado(a)</option>

                <option
                    <?php
                        if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Viuvo(a)"){
                            echo "selected";
                        }
                    ?>
                >Viuvo(a)</option>

            </select>
            <br>

            <!------------------------------------------------------------------------------------------------------->

            Senha:
            <input type="password" name="senha">
            <br>

            <!------------------------------------------------------------------------------------------------------->

            <input type="submit" value="Enviar">



        </form>

    <?php } ?>

</body>
</html>

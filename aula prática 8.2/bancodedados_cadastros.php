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

            //1° PARTE
            // tenta conexão
            try{
                $connection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
                $connection->exec("set names utf8");

            }
            // se der erro
            catch (PDOException $e)
            {
                echo "Falha: " . $e->getMessage();
                exit();
            }

            $sql = "INSERT INTO usuarios(nome, email, idade, sexo, estado_civil, humanas, exatas, biologicas, senha)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $connection->prepare($sql);

            $stmt->bindParam(1, $_POST["nome"]);
            $stmt->bindParam(2, $_POST["email"]);
            $stmt->bindParam(3, $_POST["idade"]);
            $stmt->bindParam(4, $_POST["sexo"]);
            $stmt->bindParam(5, $_POST["estadocivil"]); 

            $checkHumanas = isset($_POST["humanas"]) ? 1 : 0;
            $stmt->bindParam(6, $checkHumanas);

            $checkExatas = isset($_POST["exatas"]) ? 1 : 0;
            $stmt->bindParam(7, $checkExatas);

            $checkBiologicas = isset($_POST["biologicas"]) ? 1 : 0;
            $stmt->bindParam(8, $checkBiologicas);

            $passwordhach = md5("abcdef123456testesitesegunrançasoftblue!@" . $_POST["senha"]);
            $stmt->bindParam(9, $passwordhach);

            $stmt->execute();

            if($stmt->errorCode() != "00000")
            {
                $valido = false;
                $erro = "Erro código: " . $stmt->errorCode() . ": ";
                $erro .= implode(", ", $stmt->errorInfo());
            };

            //Fim da 1° PARTE
        }
    }

?>


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Bando de dados: Cadastro</title>
    </head>
    <body>

        <?php

        // 3°PASSO

            if($valido == true){
                echo "Dados enviados com sucesso!";
                echo "<br><br>";
                echo "<a href='bancodedados_listaa.php'>registro</a>";
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
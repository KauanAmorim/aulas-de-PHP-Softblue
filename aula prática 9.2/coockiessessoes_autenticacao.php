<?php ob_start(); ?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sessão e Coockies: Autentificação</title>
    </head>
    <body>

        <?php

            $visitas = isset($_COOKIE["visitas"]) ? $_COOKIE["visitas"] + 1 : 1;

            /*if(isset($_COOKIE["visitas"]))
            {
                $visitas = $_COOKIE["visitas"] + 1;
            }
            else {
                $visitas = 1;
            }*/

            setcookie("visitas", $visitas, time() + 30*24*60*60);

            echo "Essa é a sua visita numero " . $visitas . " em nosso site. <br>";

            if(isset($_REQUEST["autenticar"]) && $_REQUEST["autenticar"] == true)
            {
                $hashdasenha = md5($_POST["senha"]);

                try{
                    $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
                    $conection->exec("set names utf8");
                } catch (PDOException $e){
                    echo "Falha: " . $e->getMessage();
                    exit();
                }

                $sql = "SELECT nome FROM usuarios WHERE email = ? AND senha = ?";
                $rs = $conection->prepare($sql);
                $rs->bindParam(1, $_POST["email"]);
                $rs->bindParam(2, $hashdasenha);

                if($rs->execute())
                {
                    if($registro = $rs->fetch(PDO::FETCH_OBJ))
                    {
                        session_start();
                        $_SESSION["usuario"] = $registro->nome;

                        header("location: CoockiesSessoes_counteudosigiloso.php");
                    } else {
                        echo "Dados inválidos.";
                    }
                } else {
                    echo "Falha no acesso.";
                }

            }

        ?>

        <form method="post" action="?autenticar=true">
            E-mail: <input type="email" name="email"><br>
            Senha:  <input type="password" name="senha"><br>
                    <input type="submit" value="Autenticar">
        </form>

    </body>
</html>
<?php ob_flush(); ?>
<?php
    ob_start();
?>
<HTML>
    <HEAD>
        <TITLE>Sessão e Cookies: Autenticação</TITLE>
    </HEAD>
    <BODY>
        
<?php

    if(isset($_COOKIE["visitas"]))
    {
        $visitas = $_COOKIE["visitas"] + 1;
    }
    else
    {
        $visitas = 1;
    }

    setcookie("visitas", $visitas, time() + 30*24*60*60);
    
    echo "Essa é a sua visita número " . $visitas . " em nosso site.<BR>";
    
    if(isset($_REQUEST["autenticar"]) && $_REQUEST["autenticar"] == true)
    {
        $hashDaSenha = md5($_POST["senha"]);
        
        try
        {
            $connection = new PDO("mysql:host=localhost; dbname=cursophp", "root", "senhadobanco");
            $connection->exec("set names utf8");
        }
        catch(PDOException $e)
        {
            echo "Falha: " . $e->getMessage();
            exit();
        }
        
        $sql = "SELECT nome FROM usuarios WHERE email = ? AND senha = ?";
        $rs = $connection->prepare($sql);
        $rs->bindParam(1, $_POST["email"]);
        $rs->bindParam(2, $hashDaSenha);
        
        if($rs->execute())
        {
            if($registro = $rs->fetch(PDO::FETCH_OBJ))
            {
                session_start();
                $_SESSION["usuario"] = $registro->nome;
                
                header("location: SessaoCookies_ConteudoSigiloso.php");
            }
            else
            {
                echo "Dados inválidos.";
            }
        }
        else
        {
            echo "Falha no acesso.";
        }
        
        
        
        
    }

?>
        <FORM method=POST action="?autenticar=true">
            E-mail: <INPUT type=TEXT name=email><BR>
            Senha:  <INPUT type=PASSWORD name=senha><BR>
                    <INPUT type=SUBMIT value="Autenticar">
        </FORM>
        
    </BODY>
</HTML>
<?php
    ob_flush();
?>
<?php

$erro = null;
$valido = false;

try
{
    $connection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
    $connection->exec("set names utf8");
}
catch(PDOException $e)
{
    echo "Falha: " . $e->getMessage();
    exit();
}

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
{
    if($_POST["senha"] != $_POST["senharepete"])
    {
        $erro = "Senhas dígitadas diferentes";
        $erro .= "<br><a href='?id=". $_POST["id"] ."'>Tentar novamente</a>";
        echo $erro;
        exit();
    }
    else
    {
        $valido = true;

        $sql = "UPDATE usuarios SET
                senha = ?
                WHERE id = ?";

        $stmt = $connection->prepare($sql);

        $passwordhash = md5($_POST["senha"]);
        $stmt->bindParam(1, $_POST["senha"]);
        $stmt->bindParam(2, $_POST["id"]);

        $stmt->execute();

        if($stmt->errorCode() != "00000")
        {
            $valido = false;
            $erro = "Erro código " . $stmt->errorCode() . ": ";
            $erro .= implode(", ", $stmt->errorInfo());
        }
    }
}
else
{
    $rs = $connection->prepare("SELECT nome, email FROM usuarios WHERE id = ?");
    $rs->bindParam(1, $_REQUEST["id"]);

    if($rs->execute())
    {
        if($registro = $rs->fetch(PDO::FETCH_OBJ))
        {
            $_POST["nome"] = $registro->nome;
            $_POST["email"] = $registro->email;
        }
        else
        {
            $erro = "Registro não encontrado";
        }
    }
    else
    {
        $erro = "Falha na captura do registro";
    }
}

?>
<HTML>
<HEAD>
    <TITLE>Banco de Dados: Alteração de senha</TITLE>
</HEAD>
<BODY>
<?php

if($valido == true)
{
    echo "Senha alterada com sucesso!";
    echo "<BR><BR>";
    echo "<A href='bancodedados_listaa.php'>Visualizar registros</A>";
}
else
{

    if(isset($erro))
    {
        echo $erro . "<BR><BR>";
    }

    ?>
    <FORM method=POST action="?validar=true">

        Nova senha para o usuário:
        <?php
            echo $_POST["nome"];
            echo " (" . $_POST["email"] . ")";
            echo "<br>";
        ?>
        <br>
        Digite a senha:
        <input type="password" name="senha"><br>

        <br>
        Digite a senha novamente:
        <input type="password" name="senharepete"><br>

        <BR>

        <INPUT type=HIDDEN name=id
               value="<?php echo $_REQUEST["id"]; ?>"
        >

        <INPUT type=SUBMIT value="Alterar">

    </FORM>
    <?php
}
?>
</BODY>
</HTML>
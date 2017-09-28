<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Banco de dados: Listagem</title>
    </head>
    <body>

        <table border="1">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>Humanas</th>
                <th>Exatas</th>
                <th>Biológicas</th>
                <th>Hash da senha</th>
                <th>Ações</th>
            </tr>


        <?php

            try{
                $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
                $conection->exec("set names utf8");
            } catch (PDOEXception $e) {
                echo "Falha: " . $e->getMessage();
                exit();
            }

            if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true)
            {
                $stmt = $conection->prepare("DELETE FROM usuarios WHERE id = ?");
                $stmt->bindParam(1, $_REQUEST["id"]);
                $stmt->execute();

                if($stmt->errorCode() != "00000")
                {
                    echo "Erro código: " . $stmt->errorCode() . ": ";
                    echo implode(", ", $stmt->errorInfo());
                }
                else{
                    echo "Sucesso: usuário removido com sucesso<br>";
                }
            }

            $rs = $conection->prepare("SELECT * FROM usuarios");

            if($rs->execute())
            {
                while($registro = $rs->fetch(PDO::FETCH_OBJ))
                {
                    echo "<tr>";

                        echo "<td>". $registro->nome ."</td>";
                        echo "<td>". $registro->email ."</td>";
                        echo "<td>". $registro->idade ."</td>";
                        echo "<td>". $registro->sexo ."</td>";
                        echo "<td>". $registro->estado_civil ."</td>";
                        echo "<td>". $registro->humanas ."</td>";
                        echo "<td>". $registro->exatas ."</td>";
                        echo "<td>". $registro->biologicas ."</td>";
                        echo "<td>". $registro->senha ."</td>";

                        echo "<td>";
                        echo "<a href='?excluir=true&id=". $registro->id ."'>(exclusão)</a>";
                        echo "<a href='bancodedados_alterarr.php?id=". $registro->id ."'>(alteração)</a>";
                        echo "<a href='bancodedados_senhas.php?id=". $registro->id ."'>(alteração de senha)</a>";
                        echo "</td>";

                    echo "<tr>";
                }
            }


        ?>
        </table>

        <br>
        <a href="bancodedados_cadastros.php">Criar um novo registro</a>

    </body>
</html>

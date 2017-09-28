<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>listagem</title>
    </head>
    <body>

        <table>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>Humanas</th>
                <th>Exatas</th>
                <th>Biologicas</th>
                <th>Senha</th>
            </tr>

            <?php

                try{
                    $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
                    $conection->exec("set names utf8");
                }
                catch (PDOException $e){
                    echo "Falha: " . $e->getMessage();
                    exit();
                }

                if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true)
                {
                    $stmt = $conection->prepare("DELETE FROM usuarios WHERE id=?");
                    $stmt->bindParam(1, $_REQUEST["id"]);
                    $stmt->execute();

                    if($stmt->errorCode() != "00000"){
                        echo "Erro código" . $stmt->errorCode() . ": ";
                        echo implode(", ", $stmt->errorInfo());
                    } else {
                        echo "Sucesso: usuário removido com sucesso";
                    }
                }

                $rs = $conection->prepare("SELECT * FROM usuarios ");

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
                            echo "<a href='?excluir=true&id=". $registro->id ."'>(Exclusão)</a>";
                            echo "</td>";

                        echo "</tr>";
                    }
                }


            ?>

        </table>

        <br><br>

        <a>novo registro</a>;
    </body>
</html>

//----------------------------------------------------------------------------------------------------------------------


<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>listagem</title>
    </head>
    <body>

        <table>

            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>Humanas</th>
                <th>Exatas</th>
                <th>Biologicas</th>
                <th>Senha</th>
            </tr>

            <?php

                try{
                    $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
                    $conection->exec("set names utf8");
                } catch (PDOException $e){
                    echo "Falha: " . $e->getMessage();
                    exit();
                }

                if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true)
                {
                    $stmt = $conection->prepare("DELETE FROM usuarios WHERE id=?");
                    $stmt->bindParam(1, $_REQUEST["id"]);
                    $stmt->execute();

                    if($stmt->errorCode() != "00000")
                    {
                        echo "Erro código" . $stmt->errorCode() . ": ";
                        echo implode(", ", $stmt->errorInfo());
                    }else{
                        echo "Sucesso: usuário excluido com sucesso";
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
                            echo "<a href='?excluir=true&id=". $registro->id ."'>(Exclusão)</a>";
                            echo "</td>";

                        echo "</tr>";
                    }
                }



            ?>


        </table>

    </body>
</html>

//----------------------------------------------------------------------------------------------------------------------

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Listagem</title>
    </head>
    <body>

        <table>

            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Estado civil</th>
                <th>Humanas</th>
                <th>Exatas</th>
                <th>Biologicas</th>
                <th>Senha</th>
            </tr>

            <?php

                try{
                    $conection = new PDO("mysql:host-localhost;dbname=cursophp", "root", "Kteddy9.9");
                    $conection->exec("set names utf8");
                } catch (PDOEXception $e){
                    echo "Falha: " . $e->getMessage();
                    exit();
                }

                if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true){
                    $stmt= $conection->prepare("DELETE FROM usuarios WHERE id=?");
                    $stmt->bindParam(1, $_REQUEST["id"]);
                    $stmt->execute();

                    if($stmt->errorCode() != "00000"){
                        echo "Erro código" . $stmt->errorCode() . ": ";
                        echo implode(", ", $stmt->errorInfo());
                    }
                }

                $rs = $conection->prepare("SELECT * FROM usuarios");

                if($rs->execute()){
                    while($registro = $rs->fetch(PDO::FETCH_OBJ)){
                        echo "<tr>";

                            echo "<td>". $registro->nome ."</td>>";
                            echo "<td>". $registro->email ."</td>>";
                            echo "<td>". $registro->idade ."</td>>";
                            echo "<td>". $registro->sexo ."</td>>";
                            echo "<td>". $registro->estado_civil ."</td>>";
                            echo "<td>". $registro->humanas ."</td>>";
                            echo "<td>". $registro->exatas ."</td>>";
                            echo "<td>". $registro->biologicas ."</td>>";
                            echo "<td>". $registro->senha ."</td>>";

                            echo "<td>";
                                echo "<a href='?excluir=true&id=". $registro->id ."'>(Exclusão)</a>";
                            echo "</td>";

                        echo "</tr>";
                    }
                }


            ?>

        </table>

    </body>
</html>

//----------------------------------------------------------------------------------------------------------------------

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Listagem</title>
    </head>
    <body>

        <table>

            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>Humanas</th>
                <th>Exatas</th>
                <th>Biologicas</th>
                <th>Senha</th>
            </tr>


        <?php

            try{
                $conection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "Kteddy9.9");
                $conection->exec("set names utf8");
            }
            catch(PDOException $e){
                echo "Falha: " . $e->getMessage();
                exit();
            }

            if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true){
                $stmt = $conection->prepare("DELETE FROM usuarios WHERE id=?");
                $stmt->bindParam(1, $_REQUEST["id"]);
                $stmt->execute();

                if($stmt->errorCode() != "00000"){
                    echo "Erro código" . $stmt->errorCode() . ": ";
                    echo implode(", ", $stmt->errorInfo());
                }
            }

            $rs = $conection->prepare("SELECT * FROM usuarios");

            if($rs->execute()){
                while($registro = $rs->fetch(PDO::FETCH_OBJ)){

                    echo "<tr>";

                        echo "<td>". $registro->nome."</td>";
                        echo "<td>". $registro->email ."</td>";
                        echo "<td>". $registro->idade ."</td>";
                        echo "<td>". $registro->sexo ."</td>";
                        echo "<td>". $registro->estado_civil ."</td>";
                        echo "<td>". $registro->humanas ."</td>";
                        echo "<td>". $registro->exatas ."</td>";
                        echo "<td>". $registro->biologicas ."</td>";
                        echo "<td>". $registro->senha ."</td>";

                        echo "<td>";
                            echo "<a href='?excluir=true&id=". $registro->id ."'>(Exclusão)</a>";
                        echo "</td>";

                    echo "</tr>";
                }
            }

        ?>

        </table>
    </body>
</html>

































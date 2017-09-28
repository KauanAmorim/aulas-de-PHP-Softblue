<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Forumário: Upload</title>
    </head>
    <body>

        <?php

            if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == true)
            {
                $erro = 0;

                // 1° IF - Para ter certeza se o arquivo foi enviado pelo formulário caso alguém use a url sem ter mandado o arquivo.
                if(isset($_FILES["campoarquivo"]))
                {
                    //Colocando informações de array em variaveis.
                    $arquivonome = $_FILES["campoarquivo"]["name"];
                    $arquivotipo = $_FILES["campoarquivo"]["type"];
                    $arquivotamanho = $_FILES["campoarquivo"]["size"];
                    $arquivonometemp = $_FILES["campoarquivo"]["tmp_name"];
                    $erro = $_FILES["campoarquivo"]["error"];

                    if($erro == 0)
                    {
                        //3° para ver se o arquivo foi enviado com sucesso.
                        if(is_uploaded_file($arquivonometemp))
                        {
                            if(move_uploaded_file($arquivonometemp, "uploads/" . $arquivonome))
                            {
                                echo "Sucesso!! <br>";

                                echo "Nome original: " . $arquivonome . "<br>";
                                echo "Tipo: " . $arquivotipo . "<br>";
                                echo "Tamanho: " . $arquivotamanho . "<br>";
                                echo "Nome temporário: " . $arquivonometemp . "<br>";
                            }
                            else {
                                $erro = "Falha ao mover arquivo (Permissão de acesso, caminho inválido)";
                            }
                        }
                        else{
                            $erro = "Erro no envio: arquivo não recebido com sucesso. ()";
                        }
                    }
                    else {
                        $erro = "Erro no envio" . $erro;
                    }
                }
                else {
                    $erro = "Arquivo enviado não encontrado.";
                }

                // 2° IF - Para caso tiver algum tipo de erro, mostrar na tela o erro em questão.
                if($erro !== 0)
                {
                    echo $erro;
                }
            }

        ?>

        <form enctype="multipart/form-data" method="post" action="formulario_upload.php?envio=true">

            Arquivo:
            <input type="file" name="campoarquivo"><br>
            <input type="submit" value="Enviar">


        </form>

    </body>
</html>
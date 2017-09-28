<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulário simples: Form</title>
    </head>
    <body>

        <form method="post" action="Formularios_SimplesTratamento.php">

            Nome:
            <input type="text" name="nome"><br>

            Sobrenome:
            <input type="text" name="sobrenome"><br>

            Estado civil:
            <select name="estadocivil">
                <option>Solteiro</option>
                <option>Casado</option>
                <option>Divorciado</option>
                <option>Viúvo</option>
            </select>

            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">

        </form>

    </body>
</html>
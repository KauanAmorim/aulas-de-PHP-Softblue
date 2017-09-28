<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulário simples: Form</title>
    </head>
    <body>

        <form method="post" action="formulario_simplestratamento.php">

            nome:
            <input type="text" name="nome"><br>

            sobrenome:
            <input type="text" name="sobrenome"><br>

            Estado civil:
            <select name="estadocivil">
                <option>Solteiro</option>
                <option>Casado</option>
                <option>Divorciado</option>
                <option>Viuvo</option>
            </select>

            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">

        </form>

    </body>
</html>
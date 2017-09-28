<?php
    ob_start();
?>
<HTML>
    <HEAD>
        <TITLE>Sessão e Cookies: Conteúdo Sigiloso</TITLE>
    </HEAD>
    <BODY>
        
<?php
    session_start();

    if(!isset($_SESSION["usuario"]))
    {
        echo "Erro";
        exit();
    }
    
    echo "Olá " . $_SESSION["usuario"];
    echo "<BR><BR>";
?>
        
        [Conteúdo privado / sigiloso]
        
    </BODY>
</HTML>
<?php
    ob_flush();
?>
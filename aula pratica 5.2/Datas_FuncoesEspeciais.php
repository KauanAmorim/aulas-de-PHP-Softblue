<HTML>
    <HEAD>
        <TITLE>Datas e Funções Especiais</TITLE>
    </HEAD>
    <BODY>
        
<?php

    $agora = time();
    echo $agora . "<BR>";
    
    echo date("Y-m-d H:i:s", time()) . "<BR>";
    echo date("Y-m-d H:i:s") . "<BR>";
    echo date("d") . "<BR>";
    echo date("Y") . "<BR>";
    
    $novoTimestamp = strtotime("+ 1 day", time());
    echo date("Y-m-d H:i:s", $novoTimestamp) . "<BR>";
    
    echo date("Y-m-d H:i:s", strtotime("+ 7 day", time())) . "<BR>";
    echo date("Y-m-d H:i:s", strtotime("next monday", time())) . "<BR>";
    echo date("Y-m-d H:i:s", strtotime("last friday", time())) . "<BR>";
    echo date("Y-m-d H:i:s", strtotime("+ 1 month", time())) . "<BR>";
    echo date("Y-m-d H:i:s", strtotime("+ 10 hour", time())) . "<BR>";
    echo date("Y-m-d H:i:s", strtotime("+ 1 week", time())) . "<BR>";
    
    $meuTimestamp = mktime(0, 0, 0, 1, 1, 2000);
    echo $meuTimestamp . "<BR>";
    echo date("d/m/Y H:i:s", $meuTimestamp) . "<BR>";
    
    $data1 = checkdate(2, 15, 2020);
    if($data1 == TRUE)
    {
        echo "A data1 existe!<BR>";
    }
    else
    {
        echo "A data1 não existe!<BR>";
    }
    
    $data2 = checkdate(22, 15, 2020);
    if($data2 == TRUE)
    {
        echo "A data2 existe!<BR>";
    }
    else
    {
        echo "A data2 não existe!<BR>";
    }
    
    $data1 = mktime(0, 0, 0, 11, 29, 2020);
    $data2 = mktime(0, 0, 0, 12, 31, 2020);

    $difSeconds = $data2 - $data1;
    echo "Diferença em segundos: " . $difSeconds . "<BR>";
    
    $difMinutes = ($data2 - $data1) / 60;
    echo "Diferença em minutos: " . $difMinutes ."<BR>";
    
    $difHours = ($data2 - $data1) / 60 / 60;
    echo "Diferença em horas: " . $difHours ."<BR>";
    
    $difDays = ($data2 - $data1) / 60 / 60 / 24;
    echo "Diferença em dias: " . $difDays ."<BR>";
    
?>
        
    </BODY>
</HTML>
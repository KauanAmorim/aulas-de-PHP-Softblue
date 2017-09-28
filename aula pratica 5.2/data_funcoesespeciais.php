<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title></title>
    </head>
    <body>
        <?php

            $agora = time();
            echo $agora . "<br>";

            echo date("Y-m-d H:i:s", time()) . "<br>";
            echo date("Y-m-d H:i:s") . "<br>";
            echo date("d") . "<br>";
            echo date("Y") . "<br>";

            $novotimestamp = strtotime("+1 day", time());
            echo date("Y-m-d H:i:s", $novotimestamp) . "<br>";
            echo date("d/m/y H:i:s"). "<br>";

            echo date("Y-m-d H:i:s", strtotime("+7 days", time())) . "<br>";
            echo date("Y-m-d H:i:s", strtotime("next monday", time())) . "<br>";
            echo date("Y-m-d H:i:s", strtotime("last friday", time())) . "<br>";
            echo date("Y-m-d H:i:s", strtotime("+1 month", time())) . "<br>";
            echo date("Y-m-d H:i:s", strtotime("+1 hour", time())) . "<br>";
            echo date("Y-d-m H:i:s", strtotime("+1 week", time())) . "<br>";

            $meutimestamp = mktime(0,0,0,1,1,2000);
            echo $meutimestamp . "<br>";
            echo date("d/m/Y H:i:s", $meutimestamp) . "<br>";

            $data1 = checkdate(2,15,2020);
            if($data1){
                echo "A data1 existe! <br>";
            } else {
                echo "A data1 não existe! <br>";
            }

            $data2 = checkdate(22,15,2020);
            if($data2){
                echo "A data2 ecxiste! <br>";
            } else {
                echo "A data2 não existe! <br>";
            }

            $data1 = mktime(0,0,0,11,29,2020);
            $data2 = mktime(0,0,0,12,31,2020);


            $data1 = mktime(0, 0, 0, 11, 29, 2020);
            $data2 = mktime(0, 0, 0, 12, 31, 2020);

            $difseconds = $data2 - $data1;
            echo "A diferença em segundos: " . $difseconds . "<br>";

            $difminute = $difseconds/60;
            echo "A diferença em minutos: " . $difminute . "<br>";

            $difhour = $difminute/60;
            echo "A diferença em horas: " . $difhour . "<br>";

            $difday = $difhour/24;
            echo "A diferença em dias: " . $difday . "<br>";


        ?>
    </body>
</html>
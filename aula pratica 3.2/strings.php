<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>STRINGS</title>
    </head>
    <body>

        <?php

            $str = "exemplo para string porque eu fiz";

            echo $str . "<br>";
            print $str . "<br>";

            echo "<br><br>";

            //-----------------------------------------------

            $strlen = strlen($str);
            echo $strlen . '<br>';

            //------------------------------------------------

            $x = strpos($str, "p");
            echo $x . "<br>";
            $x = strpos($str, "p", 5);
            echo $x . "<br><br>";

            //------------------------------------------------

            $x = strchr($str, "E");
            echo $x . "<br>";

            $x = strchr($str, "e");
            echo $x . '<br><br>';

            $x = strrchr($str, "e");
            echo $x . "<br>";

            $x = strrchr($str, "p");
            echo $x . "<br><br>";

            //------------------------------------------------

            $x = substr($str, 4);
            echo $x . "<br>";

            $x = substr($str, 4, 10);
            echo $x . "<br>";

            //------------------------------------------------

            $x = str_replace("eu", "você", $str);
            echo $x . "<br>";

            $x = str_replace("fiz", "fez", $x);
            echo $x . "<br><br>";

            //-------------------------------------------------

            $x = chr(65);
            echo $x . "<br><br>";

            //-------------------------------------------------

            $x = strtoupper($str);
            echo $x . "<br>";

            $y = strtolower($x);
            echo $y . "<br><br>";

            //-------------------------------------------------

            $x = ucfirst($str);
            echo $x . "<br>";

            $x = ucwords($str);
            echo $x . "<br><br>";

            //-------------------------------------------------

            $x = strrev($str);
            echo $x . "<br><br>";

            //-------------------------------------------------

            $x = crypt($str, "Kauan");
            echo $x. "<br>";

            $x = sha1($str, "Kauan");
            echo utf8_encode($x) . "<br>";

            $x = md5($str, "Kauan");
            echo utf8_encode($x) . "<br>";

            //-------------------------------------------------

            $x = str_split($str, 4);
            echo $x . "<br>";
            echo $x[0] . "<br>";
            echo $x[1] . "<br>";
            echo $x[2] . "<br>";
            echo $x[3] . "<br>";
            echo $x[4] . "<br>";



        ?>

    </body>
</html>
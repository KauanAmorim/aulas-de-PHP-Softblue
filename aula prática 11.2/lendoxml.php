<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Lendo um XML</title>
    </head>
    <doby>

        <?php

            $dom = new DOMDocument();
            $dom->load("xmlcriaca.xml");

            $estados = $dom->getElementsByTagName("OBJECT");

            foreach($estados as $estado)
            {
                echo $estado->getElementsByTagName("ID")->item(0)->nodeValue . "<br>";
                echo $estado->getElementsByTagName("ID")->item(0)->getAttribute("Sul") . "<br>";
                echo $estado->getElementsByTagName("DESCRIPTION")->item(0)->nodeValue . "<br>";
                echo "<br>";
            }

        ?>

    </doby>
</html>
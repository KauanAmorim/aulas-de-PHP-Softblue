<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Criando um XML</title>
    </head>
    <body>

        <?php

            $states = array("PR", "RS", "SC", "SP", "RJ");
            $statessouth = array("PR", "RS", "SC");

            $dom = new DOMDocument("1.0", "UTF-8");
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;

            $root = $dom->createElement("OBJECTS");
            $idficticio = 1;

            foreach($states as $state)
            {
                $estadoelemento = $dom->createElement("OBJECT");
                $sulatributo = $dom->createAttribute("Sul");

                if(in_array($state, $statessouth))
                {
                    $sulatributo->value = "Sim";
                }
                else{
                    $sulatributo->value = "Não";
                }

                $idElemento = $dom->createElement("ID", $idficticio);
                $idElemento->appendChild($sulatributo);
                $idficticio++;

                $descricaoelemento = $dom->createElement("DESCRIPTION", $state);

                $estadoelemento->appendChild($idElemento);
                $estadoelemento->appendChild($descricaoelemento);
                $root->appendChild($estadoelemento);
            }

            $dom->appendChild($root);
            $dom->save("xmlcriaca.xml");

        ?>

    </body>
</html>
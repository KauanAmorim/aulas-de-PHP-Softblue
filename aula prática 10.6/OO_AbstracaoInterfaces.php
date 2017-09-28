<HTML>
    <HEAD>
        <TITLE>OO: Abstração e Interfaces</TITLE>
    </HEAD>
    <BODY>
        
<?php

    abstract class InstrumentoMusical
    {
        public $volume;
        public abstract function tocar();
    }
    
    interface Transportavel
    {
        public function transportar();
    }
    
    class Guitarra extends InstrumentoMusical implements Transportavel
    {
        public function tocar()
        {
            echo "Tocando guitarra <BR>";
        }
        
        public function transportar()
        {
            echo "Transporte de guitarra: entrar em contato com a loja de música <BR>";
        }
    }
    
    class Computador implements Transportavel
    {
        public function transportar()
        {
            echo "Transporte de computador: chame a Softblue! <BR>";
        }
    }
    
    $guitarra = new Guitarra();
    $guitarra->tocar();
    $guitarra->transportar();
    
    $computador = new Computador();
    $computador->transportar();

?>
        
    </BODY>
</HTML>
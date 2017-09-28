<HTML>
    <HEAD>
        <TITLE>OO: Herança e Elementos Estáticos</TITLE>
    </HEAD>
    <BODY>
        
<?php

    class InstrumentoMusical
    {
        public $isPercussao;
        public $volume;
        
        public function __construct($isPercussao, $volume)
        {
            $this->isPercussao = $isPercussao;
            $this->volume = $volume;
        }
        
        // poderia ser 'final', impedindo sobreescrita
        public function tocar()
        {
            echo "Tocando no volume: " . $this->volume . " decibéis.<BR>";
        }
    }
    
    class Guitarra extends InstrumentoMusical
    {
        public function tocar()
        {
            echo "Amplificador ligado em " . $this->volume . " decibéis.<BR>";
        }
        
        public function tocarGuitarra()
        {
            $this->tocar();
            parent::tocar();
        }
    }
    
    $instrumentoMusical = new InstrumentoMusical(TRUE, 80);
    if($instrumentoMusical->isPercussao)
    {
       echo "Instrumento de percussão, volume: " . $instrumentoMusical->volume . "<BR>"; 
    }
    else
    {
       echo "Instrumento não de percussão, volume: " . $instrumentoMusical->volume . "<BR>";  
    }
    $instrumentoMusical->tocar();
    
    $guitarra = new Guitarra(FALSE, 40);
    if($guitarra->isPercussao)
    {
       echo "Instrumento de percussão, volume: " . $guitarra->volume . "<BR>"; 
    }
    else
    {
       echo "Instrumento não de percussão, volume: " . $guitarra->volume . "<BR>";  
    }
    $guitarra->tocar();
    echo "<BR><BR>";
    
    $guitarra->tocarGuitarra();
    echo "<BR><BR>";
    
    class EscalaMusical
    {
        public static $escalaDoMaior = "C D E F G A B C";
        public $vezesQueFoiUtilizada;
        
        public static function calculaDecibeis($watts)
        {
            return $watts / 10;
        }
    }
    
    echo EscalaMusical::$escalaDoMaior . "<BR>";
    echo EscalaMusical::calculaDecibeis(123) . "<BR>";
    
    $emC = new EscalaMusical();
    $emC->vezesQueFoiUtilizada = 3;
    echo "Foi utilizada: " . $emC->vezesQueFoiUtilizada . "<BR>";
    
    $emD = new EscalaMusical();
    $emD->vezesQueFoiUtilizada = 5;
    echo "Foi utilizada: " . $emD->vezesQueFoiUtilizada . "<BR>";
    
    echo $emD::$escalaDoMaior;

?>
        
    </BODY>
</HTML>
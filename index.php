<?php
class Guinzagli {
    public $marca;
    public $nome;
    public $prezzo;
    public $taglia;
    public $colore;
}
?>

<?php
class Trasportini {
    public $marca;
    public $nome;
    public $prezzo;
    public $colore;
    public $dimensioni;
    public $ruote;
}
?>
<?php
class Giochi {
    public $marca;
    public $nome;
    public $prezzo;
    public $tipolpgia; 
}
?>

<?php
class Gabbie{
    public $marca;
    public $nome;
    public $prezzo;
    public $grandezza;
    public $accessoriata;
}
?>

<?php
class Cibo {
    public $marca;
    public $nome;
    public $prezzo;
    public $animale;
    public $peso;
    public $tipo;    
}
?>
<?php
$cibo = new Cibo('Crocchette Pollo');
$cibo->$animale = 'Cane';
$cibo->$peso = '50g';
$cibo->$tipo = 'secco';
var_dump ($cibo);
?>
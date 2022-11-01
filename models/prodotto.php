<?php
class Prodotto {
    public $prezzo = 0;
    public $nome;
    public $marca;
    public $categoria;
    function __construct($_marca, $_nome, $_prezzo){
        $this->marca = $_marca;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}

?>
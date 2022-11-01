<?php
require_once __DIR__ . '/User.php';
class UtenteRegistrato extends User {
    public $name;
    public $surname;
    private $password;
}
?>
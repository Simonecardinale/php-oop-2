<?php 

require_once "user.php";

$user1 = new User;
$user1 -> id = 469;
$user1 -> nome = 'Paolo';
$user1 -> cognome = "Rossi";
$user1 -> eta = 46;
$user1 -> indirizzo = "Corso Italia";
$user1 -> numero_civico = 48;
$user1 -> comune_domicilio = "Milano";


var_dump($user1);

$user2 = new User;
$user2 -> id = 478;
$user2 -> nome = 'Mario';
$user2 -> cognome = "Bianchi";
$user2 -> eta = 58;
$user2 -> indirizzo = "Via Fontana";
$user2 -> numero_civico = 25;
$user2 -> comune_domicilio = "Roma";

var_dump($user2);

?>
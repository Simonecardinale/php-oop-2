<?php 

require_once "user.php";
require_once "employee.php";

$user1 = new User;
$user1 -> id = 469;
$user1 -> nome = 'Paolo';
$user1 -> cognome = "Rossi";
$user1 -> eta = 46;
$user1 -> indirizzo = "Corso Italia";
$user1 -> numero_civico = 48;
$user1 -> comune_domicilio = "Milano";
$user1 -> componenti_fam = 4;
$user1 ->setFamiglia(4);
$componenti = $user1 ->getFamiglia();

var_dump($user1);
echo($componenti);

$user2 = new User;
$user2 -> id = 478;
$user2 -> nome = 'Mario';
$user2 -> cognome = "Bianchi";
$user2 -> eta = 58;
$user2 -> indirizzo = "Via Fontana";
$user2 -> numero_civico = 25;
$user2 -> comune_domicilio = "Roma";
$user2 -> componenti_fam = 2;


var_dump($user2);

?>
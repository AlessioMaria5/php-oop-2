<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool</title>
</head>
<body>
    
<?php 
//BUILDINGS
require_once __DIR__ . '/Objects/Buildings/Immobile.php';
require_once __DIR__ . '/Objects/Buildings/son_types/Affitto.php';
require_once __DIR__ . '/Objects/Buildings/son_types/Vendita.php';

//USERS

require_once __DIR__ . '/Objects/Users/Users.php';
require_once __DIR__ . '/Objects/Users/son_types/Client.php';
require_once __DIR__ . '/Objects/Users/son_types/Vendor.php';



$newhouse = new Affitto('Garage','C6','Nuovo',2,20,FALSE,FALSE);
var_dump($newhouse);

$newhouse3 = new Vendita('ciao','ciao','ciao',5,5,true,true,20000);
var_dump($newhouse3);

$newhouse2 = new Vendita('ciao','ciao','ciao',5,5,false,false,500);
var_dump($newhouse2);

$newVendor1 = new Vendor(423894214, 'Via Garibaldi','Milano','Immobiliare SRL', 'Giorgio','Bianchi');
$newClient1 = new Client(200000, "ABCABC58P12A40", 'NomeLogin','NomeCliente', 'CognomeCliente');



?>
</body>
</html>
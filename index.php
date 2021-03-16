<!DOCTYPE html>
<html lang="es">
<head>
   <title>Clases y objetos</title>
  <meta charset ="utf-8"
  <meta name="viewport" content="width=device-width , initial-scale=1 , maximum-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
  <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
</head>
<body>
 <?php
require 'Car.php';

 ?>
 <?php

 $bmw = new Car(); //instanciuacion
 $mercedes = new Car();
 $audi = new Car();

echo "Color del bmw: $bmw->color";
echo "<br/>";
echo "Color del mercedes: $mercedes->color";

$bmw -> color ="azul";
$bmw ->empresa = "BMW";

$mercedes -> color ="negro";
$mercedes ->empresa = "Mercedez Benz";

echo "<br/>";
echo "Color del bmw: $bmw->color compania: $bmw->empresa";
echo "<br/>";
echo "Color del mercedes: $mercedes->color compania: $mercedes->empresa";
echo "<br/>";
echo "Bmw pitando: " .$bmw->pitar();
echo "<br/>";
echo "Mercedez pitando: " .$mercedes->pitar();

echo "<br/><br/> Probando el uso de la variable this";

$carro1 = new Car;
$carro2 = new Car();

$carro1->tieneCapota=false;
$carro1->empresa="Toyota";
$carro1->color="Verde";


$carro2->empresa="Renault";
$carro2->color="Blanco";

$carro1->pedirRevision();
$carro1->levantarCapota();

echo "<br/><br/>";
$carro2 ->pedirRevision();
$carro2 ->levantarCapota();
echo "<br/><br/> Usando el encadenamiento";
$carro3= new Car();
$gasolina = $carro3 -> llenar(10) -> correr(40) -> contenidoTanque;

echo "<br/>El numero de galones que quedan en el tanque son : ". $gasolina . "galones";

 ?>
</body>
    </html>

<?php
include __DIR__."/Libreria/Autoload.php";
$instancia = new Usuarios();
$array =  $instancia->GetallUsuarios();
$validacion = new Validacion();
$libro = new Libros();

$libro->nombre = "belarminio";
$libro->cod_autor = 001;
$libro->cantidad_pagina = 445;

$libro->Createbook();
//echo json_encode($array);
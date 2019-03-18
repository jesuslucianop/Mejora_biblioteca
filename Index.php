<?php
include __DIR__."/Libreria/Autoload.php";
$instancia = new Usuarios();
$array =  $instancia->GetallUsuarios();
$validacion = new Validacion();


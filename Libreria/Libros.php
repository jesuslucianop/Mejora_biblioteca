<?php

include __DIR__."/Intefaces/ILibros.php";
Class Libros 
{
    private $nombre;
    private $cod_autor;
    private $cantidad_pagina;
    private $db;
    private $mysqli;
    public function __construct()
    {
                //Get the instance of conection
                $this->db = Conexion::Getinstancia();
                //put in mysqli property a method that get the object mysqli
                $this->mysqli =  $this->db->GetConexion();
    }
    public function GetallBook()
    {
        
        $data = $this->mysqli->query("Select * from libros");
        $arreglo[] = $data->fetch_array();
        echo json_encode($arreglo);
    }
    public function Setname($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function Getname()
    {
        return $this->nombre;
    }
    public function Createbook()
    {
        echo $this->nombre;
    }
    public function updatebook()
    {

    }
    public function deletbook()
    {

    }
}
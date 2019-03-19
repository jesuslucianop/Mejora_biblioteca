<?php
include __DIR__."/Libreria/Conexion.php";
Class Libros 
{
    private $db;
    private $mysqli;
    public function __construct()
    {
                //Get the instance of conection
                $this->db = Conexion::Getinstancia();
                //put in mysqli property a method that get the object mysqli
                $this->mysqli =  $this->db->GetConexio();
    }
    public function GetallBook()
    {

    }
    public function Createbook()
    {

    }
    public function updatebook()
    {

    }
    public function deletbook()
    {

    }
}
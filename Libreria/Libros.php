<?php

include __DIR__."/Intefaces/ILibros.php";
Class Libros 
{   private $id;
    private $nombre = "";
    private $cod_autor;
    private $cantidad_pagina;
    private $db;
      //Get the instance of conection in the constructor of this class
    public function __construct() {$this->db = Conexion::Getinstancia()->GetConexion();}
    static function GetallBook()
    {   
        $con = Conexion::Getinstancia()->GetConexion();
        $data = $con->query("Select * from libros");
        while($row = mysqli_fetch_object($data)){$datos[] = $row;}
        return $datos;
    }
 
    public function Createbook()
    {
        $query= $this->db->query("INSERT INTO libros(Nombre,cod_autor,cantidad_pagina) VALUES{$this->nombre},{$this->cod_autor},{$this->cantidad_pagina}); ");
    }
    public function updatebook()
    {
        $data = $this->db->query("UPDATE libros SET Nombre = $this->nombre},cod_autor = {$this->cod_autor},cantidad_pagina = {$this->cantidad_pagina} WHERE id ={$this->id}; ");

    }
    public function deletbook()
    {
        $data = $this->db->query("Delete from Libros where id = '".$this->id."' ");
    }
    //Method magic for get property private 
    function __get($propiedad)
    {
        if(isset($this->$propiedad))
        {
           return $this->$propiedad;
        }else {
                echo "No existe la propiedad {$this->$propiedad}";
        }
    }
    function __set($propiedad,$valor)
    {
        if(isset($this->$propiedad))
        {
            $this->$propiedad = $valor;
        }else {
                echo "No existe la propiedad {$propiedad}";
        }
    }
}
<?php 
Class Usuarios
{
    private $Nombre;
    private  $username;
    private $password;
    private $Rol;
    private $db;
    private $list =   array();
    public function __Construct()
    {
   
        $this->db = Conexion::Getinstancia();
    }
    public function CreateNewUser()
    {
        $sql = "INSERT INTO usuarios (nombre,username,password,rol)
        VALUES ('".$this->nombre."')";
    }
    public  function GetallUsuarios()
    {
        $sql = "Select * from usuarios";
        $mysqli = $this->db->GetConexion();
       
         $data= $mysqli->query("select * from usuarios");
        $fila = $data->fetch_object();
        /*foreach ($fila as $value) {
           // echo "$value <br>";
            echo json_encode($value);
        }*/
        while ($obj = $data->fetch_object()) {
            printf ("%s (%s)\n", $obj->Nombre, $obj->Username);
        }
     
    }
    public function Updatenew()
    {


    }
    public function DeleteUser()
    {
        
    }

}
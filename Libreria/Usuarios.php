<?php 
include __DIR__."/Intefaces/Iusuarios.php";

Class Usuarios  implements Iusuarios
{
    private $Nombre;
    private  $username;
    private $password;
    private $Rol;
    private $db;
    
    //Get the instance of conection in the constructor of this class 
    public function __Construct(){ $this->db = Conexion::Getinstancia()->GetConexion();}
    public function __set($prop,$val)
    {
        if(isset($prop))
        { $this->$prop = $val;}else{echo "No existe una propiedad llamada {$prop}";}
    }
    //Method for Create new user 
    public function CreateNewUser()
    {
        $data = $this->db->query("INSERT INTO usuarios (nombre,username,password,rol) VALUES ('".$this->nombre."' '".$this->username."','".$this->password."','".$this->rol."')");
    }
    // Method for Get all users from database 
    static function GetallUsuarios()
    {
        $ocon = Conexion::GetInstancia()->GetConexion();
        $sql = "Select * from usuarios";
        $data=  $ocon->query("select * from usuarios ");
         while($fila = mysqli_fetch_object($data)/*$fila = $ocon->fetch_object($data)*/){
             $datos[] = $fila;
         }
        return $datos;
    }
    //Method f
    public function UpdateUser()
    {
        $data = $this->db->query("UPDATE usuarios SET Nombre = '".$this->nombre."',Username = '".$this->username."', Password = '".$this->password."',Rol = '".$this->rol."' WHERE id = '".$id."' ");

    }
    public function DeleteUser()
    {
        $data = $this->db->query("Delete from usuarios where Username = '".$this->username."' ");

    }

}
<?php 
include __DIR__."/Intefaces/Iusuarios.php";

Class Usuarios  implements Iusuarios
{
    private $Nombre;
    private  $username;
    private $password;
    private $Rol;
    private $db;
    private $mysqli;
    private $list =   array();
    public function __Construct()
    {
        //Get the instance of conection
        $this->db = Conexion::Getinstancia();
        //put in mysqli property a method that get the object mysqli
        $this->mysqli =  $this->db->GetConexion();
    }
    //Method for Create new user 
    public function CreateNewUser($nombre,$username,$password,$rol)
    {
        $data = $this->mysqli->query("INSERT INTO usuarios (nombre,username,password,rol) VALUES ('".$nombre."' '".$username."','".$password."','".$rol."')");
    }
    // Method for Get all users from database 
    static function GetallUsuarios()
    {
        $sql = "Select * from usuarios";
         $data= $this->mysqli->query("select * from usuarios ");
         while($fila = $this->mysqli->fetch_object($data)){
             $datos[] = $fila;
         }
return $datos;
         /*
        $res = $data->fetch_row();  
        while($row = $data->fetch_objet())
        {
        $rows3[] = $row;
        }
        
        foreach($rows3 as $row2)
        {
     //   echo json_encode($row2);
         return json_encode($row2);
        }*/
    }
    //Method f
    public function UpdateUser($nombre,$username,$password,$rol)
    {
        $data = $this->mysqli->query("UPDATE usuarios SET id = '".$id."',Nombre = '".$Nombre."',Username = '".$Username."', Password = '".$Password."',Rol = '".$rol."' WHERE id = '".$id."' ");

    }
    public function DeleteUser($username)
    {
        $data = $this->mysqli->query("Delete from usuarios where Username = '".$username."' ");

    }

}
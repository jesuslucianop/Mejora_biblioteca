<?php 
Class Usuarios
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
   
        $this->db = Conexion::Getinstancia();
        $this->mysqli =  $this->db->GetConexion();
    }
    public function CreateNewUser()
    {
        $data = $this->mysqli->query("INSERT INTO usuarios (nombre,username,password,rol) VALUES ('".$nombre."' '".$username."','".$password."','".$rol."')");

    }
    // Method for Get all users from database 
    public  function GetallUsuarios()
    {
        $sql = "Select * from usuarios";
         $data= $this->mysqli->query("select * from usuarios order by id asc");
        $res = $data->fetch_row();
        if($data){
        while($row = $data->fetch_array())
        {
        echo json_encode($row); 
        echo "<br />";
        }
    }
     
    
    }
    public function UpdateUser()
    {
        $data = $this->mysqli->query("UPDATE usuarios SET id = '".$id."',Nombre = '".$Nombre."',Username = '".$Username."', Password = '".$Password."',Rol = '".$rol."' WHERE id = '".$id."' ");

    }
    public function DeleteUser()
    {
        $data = $this->mysqli->query("Delete from usuarios where Username = '".$username."' ");

    }

}
<?php 
include  __DIR__."/Cnf.php";
Class Conexion extends Credenciales
{
    private static  $instancia;
    public $conn;
    
    public static function GetInstancia()
    {
        if(!self::$instancia)
        {
            self::$instancia = new Conexion();

        }
        return self::$instancia;
    }
    private function  __clone(){}
    private function __construct()
    {
        $this->_connection = new mysqli($this->_host, $this->_username,$this->_password, $this->_database);
        // Error handling
        if(mysqli_connect_error())
        {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
        }
    }
    public function GetConexion()
    {
        return $this->conn;

    }

}
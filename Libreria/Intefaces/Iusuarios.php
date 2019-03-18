<?php
interface Iusuarios
{
    public function CreateNewUser($nombre,$username,$password,$rol);
    public function GetallUsuarios();
    public function UpdateUser($nombre,$username,$password,$rol);
    public function DeleteUser($username);

}
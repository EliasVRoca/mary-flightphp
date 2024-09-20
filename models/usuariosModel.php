<?php
class UsuariosModel extends Database
{
    function __construct()
    {
        $this->connect();
    }
    public function obtenerTodosUsuarios()
    {
        return $this->getData("SELECT * FROM tbl_usuarios WHERE 1");
    }
}

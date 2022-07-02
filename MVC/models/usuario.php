<?php

class Usuario
{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    public function __construct() {
		parent::__construct();
	}

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    public function conseguirTodos()
    {
        return "Sacando todos los usuarios";
    }
}

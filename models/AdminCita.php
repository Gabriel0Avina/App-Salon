<?php

namespace Model;

class AdminCita extends ActiveRecord{
    protected static $tabla = 'citasservicios';
    protected static $columnasDB = ['id','hora','nombre','email','telefono','servicio','precio'];

    public $id;
    public $hora;
    public $nombre;
    public $email;
    public $telefono;
    public $servicio;
    public $precio;

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? null;
        $this->hora = $args['hora'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['id'] ?? '';
        $this->servicio = $args['servicio'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }


}
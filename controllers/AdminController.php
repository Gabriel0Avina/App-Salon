<?php

namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class AdminController{

    public static function index(Router $router){
        //session_start();

        isAdmin();

        $fecha = $_GET['fecha'] ?? date('Y-m-d');

        $fechas = explode('-', $fecha);

        if( !checkdate($fechas[1],$fechas[2], $fechas[0]) ){
            header('location:/404');

        }
        
        
        

        //consultar la base de datos
        $consulta = "SELECT
        citas.id, citas.hora, CONCAT(usuarios.nombre, ' ', usuarios.apellido) nombre, usuarios.email, usuarios.telefono,
        servicios.nombre AS servicio, servicios.precio";
        $consulta .= " FROM citas ";
        $consulta .= " LEFT OUTER JOIN usuarios ON citas.usuarioId = usuarios.id";
        $consulta .= " LEFT OUTER JOIN citasservicios ON citasservicios.citaId = citas.id";
        $consulta .= " LEFT OUTER JOIN servicios ON servicios.id = citasservicios.servicioId";
       
        $consulta .= " WHERE fecha = '${fecha}'";
        
        $citas =AdminCita::SQL($consulta);
        
        
        $router->render('admin/index',[
            'nombre' => $_SESSION['nombre'],
            'citas' => $citas,
            'fecha' => $fecha
        ]);
    }
}
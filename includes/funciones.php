<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Funcion que revise que el usuario esta autenticado

function isAuth(){
    if(!isset($_SESSION['login'])){
        header('Location: /');
    }
}

function esUltimo($actual, $proximo){
    if($actual !== $proximo){
        return true;
    }else{
        return false;
    }
}

function isAdmin(){
    if(!isset($_SESSION['admin'])){
        header('location: /');
    }
}
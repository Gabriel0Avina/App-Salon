<?php 
include_once __DIR__ . '/../templates/barra.php'
?>
<h1 class="nombre-pagina">Panel de Administracion</h1>

<h2>Buscar Citas</h2>
<div class="busqueda">
    <form action="" class="formulario">
        <div class="campo">
            <label for="fecha">fecha</label>
            <input 
            type="date" 
            name="fecha"
             id="fecha"
             value="<?php echo $fecha ?>">
        </div>
    </form>
</div>
<?php
if(count($citas) === 0){
    echo "<h2> No hay citas en esta fecha </h2>";
}

?>
<div id="citas-admin" >

    <ul class="citas">

    <?php
    $idCita = 0;
    foreach($citas as $key=> $cita){
        if( $idCita !== $cita->id){
            $total = 0;

    ?>
    
    <li>
        <p>Id: <span>   <?php echo $cita->id; ?>     </span></p>
        <p>hora: <span>   <?php echo $cita->hora; ?>     </span></p>
        <p>nombre: <span>   <?php echo $cita->nombre; ?>     </span></p>
        <p>email: <span>   <?php echo $cita->email; ?>     </span></p>
        <p>telefono: <span>   <?php echo $cita->telefono; ?>     </span></p>
        <h3>servicios</h3>
        <?php
    $idCita = $cita->id; 
    }// fin del If
    $total += $cita->precio;
    ?>
        <p class="servicio"> <?php echo $cita->servicio . " " . $cita->precio ; ?>   </p>
  
    
    <?php 
        $actual = $cita->id;
        $proximo = $citas[$key + 1] -> id ?? 0;

        if(esUltimo($actual, $proximo)){?>
          <p>Total: <span>  <?php echo '$ '.$total; ?> </span></p> 
       
          <form action="/api/eliminar" method="POST">
              <input type="hidden"
              name="id"
              value="<?php echo $cita->id ?>">
              <input type="submit" class="boton-eliminar" value="Eliminar">
          </form>
       <?php
        }
    } //Fin foreach
    ?>
    </ul>
</div>

<?php

    $script = "<script src='build/js/buscador.js'></script>"

?>
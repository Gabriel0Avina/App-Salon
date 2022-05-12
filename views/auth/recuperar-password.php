<h1 class="nombre-pagina"> Recuperer password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuacion</p>


<?php include_once __DIR__ . '/../templates/alertas.php'; 

if($error){
    return ;
}

?>

<form method="POST" class="formulario">

<div class="campo">
    <label for="password">Password</label>
    <input 
    type="password"
    id="password"
    name="password"
    placeholder="tu nuevo password"
    />
</div>
<input type="submit" value="Guardar Nuevo Password" class="boton">

</form>

<div class="acciones">
        <a href="/">¿ya tienes una cuenta? inicia session aqui</a>
   
        <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una aqui </a>
    </div>

<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesion con tus datos</p>

<?php  

include_once __DIR__ ."/../templates/alertas.php";
 
?>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu Email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu password">
    </div>
    <input type="submit" value="Iniciar Session" class="boton">
    <div class="acciones">
        <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una aqui</a>
   
        <a href="/olvide">¿Olvidaste tu Contraseña? </a>
    </div>
</form>
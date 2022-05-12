<h1 class="nombre-pagina"> Olvide mi Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuacion</p>


<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/olvide" method="POST" class="formulario">
<div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Coloca tu e-mail">
    </div>
    <input type="submit" value="Enviar instrucciones" class="boton">
</form>
<div class="acciones">
        <a href="/">¿ya tienes una cuenta? inicia session aqui</a>
   
        <a href="/crear-cuenta">¿Aun no tienes una cuenta? Crea una aqui </a>
    </div>
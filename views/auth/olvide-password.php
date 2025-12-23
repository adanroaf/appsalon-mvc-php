<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Completa tu correo para reestablecer contraseña</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>  

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">E-mail</label>
        <input
            type ="email"
            id ="email"
            name ="email"
            placeholder="Tu E-mail"
        >
    </div><!-- fin div campo -->
    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div><!-- fin clase acciones -->
<h1 class="nombre-pagina">Recuperar Cuenta</h1>
<p class="descripcion-pagina">Ingresa tu nueva contraseña</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>

<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            placeholder="Contraseña"
            name="password"
        />
    </div><!-- fin div campo -->

    <input type="submit" class="boton" value="Recuperar Contraseña">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div><!-- fin clase acciones -->
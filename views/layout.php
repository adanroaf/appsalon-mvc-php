<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../build/img/favicon.webp" type="image/svg+xml">
    <title>App Salón</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <div class="contenedor-app">
        <div class="imagen"></div><!-- fin div imagen -->
        <div class="app">
            <?php echo $contenido; ?>
        </div><!-- fin div app -->
    </div><!-- fin div contenedor-app -->

    <?php
        echo $script ?? '';
    ?>
            
</body>
</html>
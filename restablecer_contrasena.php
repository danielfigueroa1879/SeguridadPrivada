<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="estilos1/style.css">
</head>
<body>

<h1>Restablecer Contraseña</h1>

<?php if (!empty($message)): ?>
    <div class="message">
        <?= $message ?>
    </div>
<?php endif; ?>

<form action="procesar_restablecer_contrasena.html" method="POST">
    <input name="email" type="text" placeholder="Ingresa tu correo electrónico">
    <input type="submit" value="Enviar correo de restablecimiento">
</form>

</body>
</html>

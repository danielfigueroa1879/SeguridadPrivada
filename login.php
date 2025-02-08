<?php
session_start();
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if ($results && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header('Location: prototipo.php');
    } else {
        $message = 'Lo siento, estas credenciales no corresponden. ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos1/style.css">
</head>
<body>

<h1>INICIAR SESIÓN</h1>
<span>  <a href="inscripcion.php">REGISTRO</a></span>

<form action="login.php" method="POST">
    <input name="email" type="text" placeholder="Ingresa tu nombre usuario">
    <input name="password" type="password" placeholder="Ingresa tu Password">
    <input type="submit" value="Iniciar Sesión"><br><br>
    <!-- Agrega el enlace para restablecer la contraseña -->
<a href="restablecer_contrasena.php">¿Olvidaste tu contraseña?</a>
</form>

<?php if (!empty($message)): ?>
    <script>
        alert("<?= $message ?>");
    </script>
<?php endif; ?>

</body>
</html>


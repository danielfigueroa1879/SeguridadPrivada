<?php
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confir_password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confir_password = $_POST['confir_password'];

    // Verificar si la contrase帽a cumple con los requisitos
    if (preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@#$%^&+=!])[A-Za-z\d@#$%^&+=!]{8,}$/', $password)) {
        if ($password === $confir_password) {
            $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $hashed_password);

            if ($stmt->execute()) {
                $message = '!!! Excelente Nuevo Usuario Creado !!! Ahora Inicia Sesi贸n 鉁岋笍馃槑馃憤';
                // Redirigir al usuario a la p谩gina de inicio de sesi贸n despu茅s de mostrar el mensaje
                echo '<script>alert("' . $message . '"); window.location.href = "login.php";</script>';
                exit; // Aseg煤rate de salir del script para evitar que se siga ejecutando
            } else {
                $message = 'Lo siento, no se pudo crear tu cuenta';
            }
        } else {
            $message = 'Las contrase帽as no coinciden';
        }
    } else {
        $message = 'La contrase帽a debe contener al menos una letra, un n煤mero y un car谩cter especial (@#$%^&+=!), y tener una longitud de al menos 8 caracteres.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscribete</title>
    <link rel="stylesheet" href="estilos1/style.css">
</head>
<body>

<h1>REGISTRO</h1>
<span> <a href="login.php">INICIAR SESIÓN</a></span>

<?php if (!empty($message)): ?>
    <script>
        alert("<?= $message ?>");
        window.location.href = "login.php"; // Redirigir inmediatamente despu茅s de mostrar el mensaje
    </script>
<?php endif; ?>

<form action="inscripcion.php" method="POST">
    <input name="email" type="text" placeholder="Ingresa tu nombre de usuario">
    <input name="password" type="password" placeholder="Ingresa tu Password">
    <input name="confir_password" type="password" placeholder="Confirma tu Password">
    <input type="submit" value="Enviar">
    

</form>
</body>
</html>

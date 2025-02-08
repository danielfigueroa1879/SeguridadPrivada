<?php

if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo '<p>' . htmlspecialchars($message) . '</p>';
}



try {
    // Establece la conexión a la base de datos (debes configurar esto previamente)
    $pdo = new PDO("mysql:host=localhost;dbname=drhrquzi_logindb", "drhrquzi_daniel", "Acua4040_");

    // Valores a insertar en la tabla
    $email = $_POST['email']; // El correo electrónico del usuario
    $token = bin2hex(random_bytes(32)); // Genera un token único
    $expiracion = date('Y-m-d H:i:s', strtotime('+1 hour')); // Fecha de expiración

    // Prepara la consulta SQL
    $sql = "INSERT INTO reset_tokens (email, token, expiration) VALUES (:email, :token, :expiration)";
    $stmt = $pdo->prepare($sql);

    // Vincula los valores a los marcadores de posición
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':token', $token);
    $stmt->bindParam(':expiration', $expiracion);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        // El token se ha insertado correctamente en la base de datos
        // Puedes mostrar un mensaje de éxito si lo deseas
        $message = 'Se ha enviado un correo de restablecimiento de contraseña a tu dirección de correo electrónico. Por favor, verifica tu bandeja de entrada.';
        header("Location: solicitud_restablecer_contrasena.php?message=" . urlencode($message));
        exit;
    } else {
        // Hubo un error al insertar el token
        // Puedes mostrar un mensaje de error si lo deseas
        $message = 'Hubo un error al enviar el correo de restablecimiento de contraseña. Por favor, inténtalo de nuevo más tarde.';
        header("Location: solicitud_restablecer_contrasena.php?message=" . urlencode($message));
        exit;
    }
} catch (PDOException $e) {
    // En caso de error de conexión a la base de datos
    echo "Error de base de datos: " . $e->getMessage();
    exit;
}
?>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar el correo electrónico ingresado por el usuario
    $email = $_POST['email'];

    // Verificar si el correo electrónico existe en tu base de datos (debes implementar esta lógica)
    // Si el correo existe, genera un token único y guárdalo en tu base de datos junto con el correo y una fecha de expiración

    // Generar un token único para el restablecimiento de contraseña
    $token = bin2hex(random_bytes(32)); // Puedes ajustar la longitud según tus necesidades

    // Establecer la fecha de expiración (por ejemplo, 1 hora después de la solicitud)
    $expiracion = date('Y-m-d H:i:s', strtotime('+1 hour'));

    // Guardar el token y la fecha de expiración en tu base de datos junto con el correo

    // Enviar el correo de restablecimiento de contraseña
    $asunto = "Restablecimiento de Contraseña";
    $mensaje = "Hola,\n\n";
    $mensaje .= "Para restablecer tu contraseña, haz clic en el siguiente enlace:\n";
    $mensaje .= "https://fiscalprivada.cl/restablecer_contrasena.php?email=" . urlencode($email) . "&token=" . urlencode($token) . "\n\n";
    $mensaje .= "Este enlace expirará en 1 hora.\n\n";
    $mensaje .= "Si no solicitaste restablecer tu contraseña, puedes ignorar este mensaje.\n";

    $cabeceras = 'From: tu@email.com' . "\r\n" .
        'Reply-To: tu@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Envía el correo
    $enviado = mail($email, $asunto, $mensaje, $cabeceras);

    if ($enviado) {
        $message = 'Se ha enviado un correo de restablecimiento de contraseña a tu dirección de correo electrónico. Por favor, verifica tu bandeja de entrada.';
    } else {
        $message = 'Hubo un error al enviar el correo de restablecimiento de contraseña. Por favor, inténtalo de nuevo más tarde.';
    }

    // Puedes redirigir al usuario a una página de confirmación aquí
}
?>

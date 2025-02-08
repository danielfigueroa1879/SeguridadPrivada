<?php
// Incluye el archivo de conexión a la base de datos
  require 'database.php';
// Mensaje de éxito o error
  $message = '';
// Verifica si se envió el formulario (POST)
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $grado = $_POST['grado'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['fono'];
    $cuadrante = $_POST['cuadrante'];
    $comisaria = $_POST['comisaria'];
    $lugar = $_POST['lugar'];
    $agente = $_POST['agente'];
    $rol = $_POST['rol'];
    $razon = $_POST['razon'];
    $rut = $_POST['rut'];
    $representante = $_POST['representante'];
    $rutRep = $_POST['rutRep'];
    $direccion = $_POST['direccion'];
    $comuna = $_POST['comuna'];
    $infraccion = $_POST['infraccion'];
    $descripccion = $_POST['descripccion'];

// Antes de la inserción, convierte el array de INFRACCIONES en una cadena de texto
    // $infracciones = implode(", ", $_POST['infraccion']);


// Preparar la consulta SQL para insertar datos en la tabla 'otra_tabla'
    $sql = "INSERT INTO labor (fecha, hora, grado, nombre, telefono, cuadrante, comisaria, lugar, agente, rol, razon, rut, representante, rutRep, direccion, comuna,infraccion, descripccion ) 
            VALUES (:fecha, :hora, :grado, :nombre, :telefono, :cuadrante, :comisaria, :lugar, :agente, :rol, :razon, :rut, :representante, :rutRep, :direccion, :comuna, :infraccion, :descripccion)";


// Ejecutar la consulta SQL
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':hora', $hora);
        $stmt->bindParam(':grado', $grado);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':cuadrante', $cuadrante);
        $stmt->bindParam(':comisaria', $comisaria);
        $stmt->bindParam(':lugar', $lugar);
        $stmt->bindParam(':agente', $agente);
        $stmt->bindParam(':rol', $rol);
        $stmt->bindParam(':razon', $razon);
        $stmt->bindParam(':rut', $rut);
        $stmt->bindParam(':representante', $representante);
        $stmt->bindParam(':rutRep', $rutRep);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':comuna', $comuna);
        $stmt->bindParam(':infraccion', $infraccion);
        $stmt->bindParam(':descripccion', $descripccion);
        // Ejecuta la consulta
        $stmt->execute();


        echo "<script>
          var confirmacion = window.confirm('Datos guardados correctamente, ¿quieres salir de la pagina o cancelar para ingresar otra  infracción?');
          if (confirmacion) {
              // Redirige al usuario a la página para ingresar otra información
              window.location.href = 'index.php';
          }
          </script>";


} catch (PDOException $e) {
    echo 'Error al guardar datos: ' . $e->getMessage();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <title>SEGURIDAD PRIVADA</title>
    <link rel="stylesheet" href="estilos1/estilos.css">


</head>
<body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <img src="logos10.png" alt="Descripción de la imagen" class="logo"><br>


    <form action="prototipo.php" method="POST">
    
    <label for="titulo"><h1>BIENVENIDO<br>FISCALIZACIÓN DE SEGURIDAD PRIVADA</h1></label>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required><br><br>
    
    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" required>
    <br><br>

    <label for="grado">Grado:</label>
    <input type="text" id="grado" name="grado" placeholder="Escriba su grado" required><br><br>

    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Escriba sus nombres y apellidos" required><br><br>

    <label for="fono">Teléfono:</label>
    <input type="tel" id="fono" name="fono" placeholder="Celular o telefono fijo" required><br><br>

    <label for="cuadrantes">Cuadrante:</label>
    <input type="text" id="cuadrante" name="cuadrante" placeholder="Escriba cuadrante" required><br><br>

    <label for="comisaria">Comisaria:</label>
    <select id="comisaria"name="comisaria">
        <option value="">-Seleccionar</option>
        <option value="1ra. Comisaria la Serena">1ra. Comisaria La Serena</option>
        <option value="Subcomisaria La Florida">Subcomisaria La Florida</option>
        <option value="Tenencia Paihuano">Tenencia Paihuano</option>
        <option value="5ta. Comisaria Vicuña">5ta. Comisaria Vicuña</option>
        <option value="Reten El Molle">Reten El Molle</option>
        <option value="Tenencia Juntas del Toro">Tenencia Juntas del Toro</option>
        <option value="2da. Comisaria Coquimbo">2da. Comisaria Coquimbo</option>
        <option value="Subcomisaria Tierras Blancas">Subcomisaria Tierras Blancas</option>
        <option value="Reten Peñuelas">Reten Peñuelas</option>
        <option value="Tenencia Andacollo">Tenencia Andacollo</option>
    </select><br><br>
    
    <br><br>

    <label for="lugar">Lugar de la Fiscalización:</label>
    <input type="text" id="lugar" name="lugar" placeholder="Supermercado, Condominio,  Servicentros, Banco, Industrias, etc." required><br><br>

    <label for="agente">Nombre del guardia, vigilante Privado, Nochero, Portero, Rondin:</label>
    <input type="text" id="agente" name="agente" placeholder="Escribir nombre agente de seguridad (guardia o vigilante, nochero, portero, rondin)" required><br><br>

    <label for="rol">R.U.T. del agente:</label>
    <input type="text" id="rol" name="rol" placeholder="Escriba el rut del agente" required><br><br>
    
    <label for="Razon Social">Razon Social de la empresa:</label>
    <input type="text" id="razon" name="razon" placeholder="Escriba Razon social" required><br><br>

    <label for="rut">R.U.T.:</label>
    <input type="text" id="rut" name="rut" placeholder="Escriba el rut de la empresa" required><br><br>

    <label for="representante">Respresentante Legal:</label>
    <input type="text" id="representante" name="representante" placeholder="Escriba nombre del representante legal" required><br><br>

    <label for="rutRep">R.U.T.:</label>
    <input type="text" id="rutRep" name="rutRep" placeholder="Escriba el rut representante legal" required><br><br>

    <label for="direccion">Dirección del lugar donde se realiza el servicio:</label>
    <input type="text" id="direccion" name="direccion"  placeholder="Dirección donde trabaja el agente de seguridad." required><br><br>

    <label for="comuna">Comuna:</label>
    <select id="comuna"name="comuna">
        <option value="">-Seleccionar</option>
        <option value="LA SERENA">LA SERENA</option>
        <option value="COQUIMBO">COQUIMBO</option>
        <option value="TONGOY">TONGOY</option>
        <option value="ANDACOLLO">ANDACOLLO</option>
        <option value="PAIHUANO">PAIHUANO</option>
        <option value="VICUÑA">VICUÑA</option>
    </select><br><br>
    
    <label for="infraccion">Infracciones:</label>
    <select id="infraccion" name="infraccion">
        
    <option value="">-Seleccionar</option>
        <option value="GG.SS. Sin curso (art. 13 D.S. 93)">Guardia de Seguridad (GG.SS.) Sin curso de guardia (art. 13 D.S. 93)</option>
        <option value="GG.SS. Sin directiva (art. 15 D.S. 93)">GG.SS. Sin directiva de funcionamiento (art. 15 D.S. 93)</option>
        <option value="GG.SS. Sin credencial (art. 18 D.S. 93)">GG.SS. Sin credencial (art. 18 D.S. 93)</option>
        <option value="GG.SS. Sin uniforme (art. octavo D/E 867)">GG.SS. Sin uniforme reglamentario (art. octavo D/E 867)</option>
        <option value="Guardia usa implementos NO autorizados art. 14 D. 93">Guardia de Seguridad, Nochero, Portero o Rondín, que porta o usa implementos de seguridad no autorizados por Carabineros de Chile (bastón,
esposas, perros, etc.)(art. 14 D. 93)</option>
        <option value="No da cumplimiento a la directiva (art. 15. D.93)">GG.SS. No da cumplimiento a la directiva</option>
        <option value="Vigilante Privado que No da cumplimiento al plan">VV.PP. (Vigilante Privado) No da cumplimiento al plan de seguridad (D.L.3.607)</option>
        <option value="No da cumplimiento al plan de seguridad (Ley 19.303)">Entidad obligada que no da cumplimiento a las medidas de seguridad (ley 19.303)</option>
        <option value="No da cumplimiento a las medias de seguridad (ley 19.303)"> Establecimiento de venta de combustible al público o entidad obligada, que no da cumplimiento a las medidas de seguridad aprobadas por la Prefectura de Carabineros(ley 19.303)</option>
        <option value="No dan informacion solicitada por Carabineros de Chile de las medias de seguridad (Art. 9 ley 19.303)">Establecimiento de venta de combustible o entidad obligada, que no proporciona las informaciones pertinentes que les sean requeridas por Carabineros de Chile, sobre las
medidas de seguridad aprobadas.(Art. 9 ley 19.303)</option>
        <option value="vigilante sin credencial">Vigilante privado (VV.PP.)sin credencial vigente (art. 13 D. 1773)</option>
        <option value="vigilante privado no conoce los sistema de seguridad (art. 6 inc 2 del 1122)">Vigilante privado sin conocer los sistemas de seguridad de la entidad. (art. 6-2°, D 1.122.)</option>
        <option value="vigilante privado de civil, sin autorizacion art. 4 Decreto ley N 3.607">Vigilante privado vistiendo de civil, sin autorización de carabineros.(art. 4, Decreto ley N° 3.607,)</option>
        <option value="Sin vigilante privado, (art. 3, del Decreto ley N°3.607)">No contar con vigilante privado. (art. 3, del Decreto ley N°3.607,)</option>
        <option value="Vigilante Privado sin armamento (art. 1, inc. 2 D. 3.607)">Vigilante privado desarrollando servicio sin portar su arma de fuego. (art. 1°, inc. 2° D. 3.607,)</option>
        
        
    </select><br><br>

    <label for="descripccion">Descripción de la Inobservancia de Seguridad Privada (Una descripción breve)</label><br>
    <textarea id="text" name="descripccion" rows="5" cols="50" maxlength="1200" placeholder="Escriba la inobservancia " required></textarea><br><br>

    <input type="submit" value="Enviar">

   

    </form>
  
</body>
</html>

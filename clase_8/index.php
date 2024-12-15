<?php
$nombreError = $notaError = "";
$calificacion = "";
$nombre = "";
$nota = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $nota = trim($_POST['nota']);
    if (empty($nombre)) {
        $nombreError = "El nombre del alumno es obligatorio.";
    }
    if (empty($nota)) {
        $notaError = "La nota es obligatoria.";
    } elseif (!is_numeric($nota)) {
        $notaError = "La nota debe ser un numero.";
    } elseif (empty($nota) ) 
    {   $notaError = "La nota debe estar entre 0 y 10.";}
    if (empty($nombreError) && empty($notaError)) {
        if ($nota <= 2) {
            $calificacion = "Muy deficiente";
        } elseif ($nota >= 3 && $nota <= 5) {
            $calificacion = "Insuficiente";
        } elseif ($nota >= 6 && $nota <= 7) {
            $calificacion = "Bien";
        } elseif ($nota >= 8 && $nota <= 9) {
            $calificacion = "Notable";
        } elseif ($nota == 10) {
            $calificacion = "Sobresaliente";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Calificacion</title>
</head>
<body>
    <h2>Ingreso de Calificacion</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"><br><br>
        <label for="nota">Nota del alumno (1-10):</label>
        <input type="text" id="nota" name="nota" value="<?php echo htmlspecialchars($nota); ?>"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php if (!empty($nombreError)): ?>
        <p style="color: red;"><?php echo $nombreError; ?></p>
    <?php endif; ?>   
    <?php if (!empty($notaError)): ?>
        <p style="color: red;"><?php echo $notaError; ?></p>
    <?php endif; ?>
    <?php if (empty($nombreError) && empty($notaError) && !empty($nombre) && !empty($nota)): ?>
        <h3>Resultado de la Calificacion</h3>
        <p><strong>Alumno:</strong> <?php echo htmlspecialchars($nombre); ?></p>
        <p><strong>Nota:</strong> <?php echo htmlspecialchars($nota); ?></p>
        <p><strong>Calificacion:</strong> <?php echo $calificacion; ?></p>
    <?php endif; ?>

</body>
</html>

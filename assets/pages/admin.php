<?php
include '../conexion.php';
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // CASO A: Actualización Masiva (Porcentaje)
    if (isset($_POST['accion_masiva'])) {
        $porcentaje = floatval($_POST['porcentaje']);
        $tipo = $_POST['tipo_cambio']; // "aumento" o "descuento"
        
        if ($tipo === 'aumento') {
            // SQL multiplica el precio por (1 + porcentaje/100)
            $factor = 1 + ($porcentaje / 100);
            $sql = "UPDATE producto SET precio = precio * $factor";
            $mensaje = "¡Aumento del $porcentaje% aplicado a todos los productos!";
        } else {
            // SQL multiplica el precio por (1 - porcentaje/100)
            $factor = 1 - ($porcentaje / 100);
            $sql = "UPDATE producto SET precio = precio * $factor";
            $mensaje = "¡Descuento del $porcentaje% aplicado a todos los productos!";
        }
        
        $conexion->query($sql);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Hojas de Alma</title>
    
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>

    <main class="main-admin">
        <h1 class="titulo-admin">Administración de Precios</h1>
        
        <?php if(!empty($mensaje)): ?>
            <div class="alerta-exito" role="alert">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>

        <!-- Sección semántica para la herramienta masiva -->
        <section class="seccion-control">
            <h2>Modificación Porcentual Global</h2>
            <p>Este cambio afectará directamente el precio en vivo de tus 30 productos en la galería.</p>
            
            <form method="POST" action="">
                <input type="hidden" name="accion_masiva" value="1">
                
                <div class="grupo-formulario">
                    <label>Selecciona el tipo de ajuste:</label>
                    <div class="radio-opciones">
                        <label>
                            <input type="radio" name="tipo_cambio" value="aumento" checked> Aumento (+)
                        </label>
                        <label>
                            <input type="radio" name="tipo_cambio" value="descuento"> Descuento (-)
                        </label>
                    </div>
                </div>
                
                <div class="grupo-formulario">
                    <label for="porcentaje">Porcentaje a aplicar:</label>
                    <input type="number" name="porcentaje" id="porcentaje" class="input-porcentaje" min="1" max="100" placeholder="Ej: 10" required>
                    <span>%</span>
                </div>
                
                <!-- Alerta nativa de JS antes de ejecutar un cambio tan grande en la BD -->
                <button type="submit" class="btn-actualizar" onclick="return confirm('¿Estás seguro de que deseas alterar TODOS los precios de la base de datos?');">
                    Aplicar a toda la tienda
                </button>
            </form>
        </section>
    </main>

</body>
</html>
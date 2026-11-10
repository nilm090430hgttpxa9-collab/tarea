<?php
// Lista de saludos en diferentes idiomas
$saludos = array(
    "Español" => "Hola, Bienvenido.",
    "Ingles" => "Hello, Welcome.",
    "Frances" => "Bonjour, Bienvenue.",
    "Aleman" => "Hallo!, Willkommen.",
    "Italiano" => "Ciao, Benvenuto.",
    "Japones" => "こんにちは,ようこそ。"
);

// Ver si si se elijio elsaludo
$mensaje = "";

if (isset($_POST['idioma'])) {

    // Obtener el idioma seleccionado
    $idioma = $_POST['idioma'];

    // Buscar el saludo correspondiente
    $mensaje = $saludos[$idioma];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">

        <h1>Saludos en diferentes idiomas</h1>

        <form method="POST">

            <label>Selecciona un idioma:</label>

            <select name="idioma" required>
                <option value="">Seleccionar</option>
                <option value="Español">Español</option>
                <option value="Ingles">Ingles</option>
                <option value="Frances">Frances</option>
                <option value="Aleman">Aleman</option>
                <option value="Italiano">Italiano</option>
                <option value="Japones">Japones</option>
            </select>

            <br><br>

            <button type="submit">Mostrar saludo</button>

        </form>

        <h2><?php echo $mensaje; ?></h2>

    </div>

</body>
</html>
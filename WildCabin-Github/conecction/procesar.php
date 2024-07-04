<?php
include ('conexion.php');
//envio de datos a la base de datos por medio mysql_query

if(isset($_POST['send'])) {
    $nombre = trim($_POST['nombre']);
    $ubicacion = trim($_POST['ubicacion']);
    $comentario = trim($_POST['comentario']);

    $sql = "INSERT INTO testimonials (nombre, ubicacion, comentario) VALUES ('$nombre', '$ubicacion', '$comentario')";
    $resultado = mysqli_query($conn, $sql);
    
    if($resultado) {
        mostrarAlerta("¡Gracias por su comentario!");
    }
    else {
        mostrarAlerta( "Error: ". $sql. "<br>". mysqli_error($conn));
    }
}

function mostrarAlerta($mensaje) {
    // Generar código JavaScript para mostrar la alerta
    echo "<script>";
    echo "alert('$mensaje');";
    echo "window.history.back();";
    echo "</script>";
    exit;
}


//leer base da datos y volcar en array $perfiles
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para seleccionar todos los comentarios de la tabla 'testimonials'
$sql = "SELECT nombre, ubicacion, comentario FROM testimonials ORDER BY id DESC";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Inicializar el array $perfiles
    $perfiles = array();

    // Obtener todos los comentarios y guardarlos en el array $perfiles
    while ($row = $result->fetch_assoc()) {
        $perfiles[] = $row;
    }
} else {
    $perfiles = array();
}


// Devolver el array $perfiles como JSON
echo json_encode($perfiles);



//newsletter
//ingresar email en base de datos newsletter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insertar datos en la tabla
$sqlnews = "INSERT INTO newsletter (email) VALUES ('$email')";
$resultado2 = mysqli_query($conn, $sqlnews);
    
    if($resultado2) {
        mostrarAlerta("¡Gracias por suscribirte!");
    }
    else {
        mostrarAlerta( "Error: ". $sqlnews. "<br>". mysqli_error($conn));
    }

}

// Cerrar conexión
$conn->close();
?>

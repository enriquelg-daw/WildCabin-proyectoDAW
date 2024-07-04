<?php
//envio de datos a la base de datos por medio mysql

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $provincia = $_POST['provincia'];
    $parcela = $_POST['parcela'];
    $presupuesto = $_POST['presupuesto'];
    $comentario = $_POST['comentario'];
    $acepto = isset($_POST['acepto']) ? 1 : 0;

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";  
    $password = "";  
    $dbname = "testimonial";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO budgets (nombre, telefono, email, provincia, parcela, presupuesto, comentario, acepto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssdsi", $nombre, $telefono, $email, $provincia, $parcela, $presupuesto, $comentario, $acepto);

    if ($stmt->execute()) {
        echo "Solicitud enviada con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>

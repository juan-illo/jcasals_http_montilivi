<?php
// Connectar a la BDD (Modifica amb les teves dades)
$conn = mysqli_connect("localhost", "admin", "admin", "prime_db");

if (!$conn) { die("Connexió fallida: " . mysqli_connect_error()); }

// Crear taula si no existeix (per si de cas)
$sql = "CREATE TABLE IF NOT EXISTS contador (id INT PRIMARY KEY, visites INT)";
mysqli_query($conn, $sql);

// Inicialitzar si està buida
$sql = "SELECT * FROM contador WHERE id=1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    mysqli_query($conn, "INSERT INTO contador (id, visites) VALUES (1, 0)");
}

// Sumar visita
mysqli_query($conn, "UPDATE contador SET visites = visites + 1 WHERE id=1");

// Llegir
$result = mysqli_query($conn, "SELECT visites FROM contador WHERE id=1");
$row = mysqli_fetch_assoc($result);

echo "<h1>Contador Base de Dades</h1>";
echo "Visites totals BDD: " . $row['visites'];
?>
<?php
$host = getenv('DB_HOST') ?: 'db';
$db   = getenv('DB_NAME') ?: 'practica_db';
$user = getenv('DB_USER') ?: 'appuser';
$pass = getenv('DB_PASS') ?: 'apppass';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

$result = $conn->query("SHOW TABLES");

echo "<h1>✅ Conexión exitosa a la base de datos</h1>";
echo "<h2>Tablas disponibles en '$db':</h2><ul>";

while ($row = $result->fetch_array()) {
    echo "<li>" . $row[0] . "</li>";
}

echo "</ul>";

$conn->close();
?>

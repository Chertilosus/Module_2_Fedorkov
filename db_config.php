<?php
$db_servername = "localhost";
$db_username = "biba_rf";
$db_password = "lcJ8Dd8EoiraqO6A";
$db_name = "biba_rf";

$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}
?>

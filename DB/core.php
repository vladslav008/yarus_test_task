<?php
function connect_table($table_name)
{
    $conn = new mysqli("localhost", "root", "Ghjvfd!2", $table_name);
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    return $conn;
}
function sent_row($table, ...$columns)
{
    $conn = new mysqli("localhost", "root", "Ghjvfd!2", $table);
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    return $conn;
}
?>
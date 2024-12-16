<?php 

$envVars = getenv();

// Вывести переменные в читаемом формате
echo '<pre>';
print_r($envVars);
echo '</pre>';



$mysqli = new mysqli('t4ks4c8ock884kc48wg8wgog', 'mysql', 'NOJwpgedngrJKNa99GbvoRmsfHLuAvj9Fhzhkhe9HGRyWaec6ozQJXUfz67heenh', 'default');

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
} else {
    echo 'Connection successful!';
}

?>
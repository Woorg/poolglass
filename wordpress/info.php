<?php 

echo '<pre>';
print_r($_ENV);
echo '</pre>';


$envVars = getenv();

// Вывести переменные в читаемом формате
echo '<pre>';
print_r($envVars);
echo '</pre>';

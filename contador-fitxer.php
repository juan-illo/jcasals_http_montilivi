<?php
$fitxer = 'contador.txt';
// Si no existeix, el crea amb 0
if (!file_exists($fitxer)) {
    file_put_contents($fitxer, 0);
}
// Llegeix, suma i guarda
$visites = file_get_contents($fitxer);
$visites++;
file_put_contents($fitxer, $visites);

echo "<h1>Contador Fitxer</h1>";
echo "Visites totals globals: " . $visites;
?>
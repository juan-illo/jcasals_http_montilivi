<?php
if (!isset($_COOKIE['visites'])) {
    $visites = 1;
} else {
    $visites = $_COOKIE['visites'] + 1;
}
// La cookie caduca en 1 hora (3600 segons)
setcookie('visites', $visites, time() + 3600);
echo "<h1>Contador Cookies</h1>";
echo "Has visitat aquesta pàgina: " . $visites . " vegades.";
?>
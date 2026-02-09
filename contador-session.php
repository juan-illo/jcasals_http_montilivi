<?php
session_start();
if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 1;
} else {
    $_SESSION['visites']++;
}
echo "<h1>Contador Sessions</h1>";
echo "Has visitat aquesta pàgina: " . $_SESSION['visites'] . " vegades.";
?>
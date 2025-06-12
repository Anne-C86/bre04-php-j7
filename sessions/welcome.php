<?php
session_start();
$pseudo="invite";

if (isset($_SESSION["nickname"])) {
    $pseudo = $_SESSION["nickname"];
}

echo "Bienvenue ". $pseudo;
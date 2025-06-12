<?php
$password = $_GET["password"];
$hash = $_GET["hash"];

$isValid = password_verify($password, $hash);

$isPasswordCorrect = password_verify($password, $hash);

if ($isPasswordCorrect === true) {
    echo "Mot de passe correct";
} else {
    echo "Mot de passe incorrect";
}
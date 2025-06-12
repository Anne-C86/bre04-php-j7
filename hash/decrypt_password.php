<?php
$passwordText = $_POST['password'];

$hashedPassword = password_hash($passwordText, PASSWORD_DEFAULT);

$isPasswordCorrect = password_verify($passwordText, $hashedPassword);

if ($isPasswordCorrect === true) {
    echo "Mot de passe correct";
} else {
    echo "Mot de passe incorrect";
}
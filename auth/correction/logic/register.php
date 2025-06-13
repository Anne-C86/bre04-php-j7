<?php

require "../connexion.php";

if (isset($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["password"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = $db->prepare("INSERT INTO users (id, first_name, last_name, email, password) VALUES (NULL, :first_name, :last_name, :email, :password)");
    $parameters = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => $hash
    ];
    $query->execute($parameters);
}
//On fait une redirection vers la homepage. C'est comme si on cliquait sur un lien. C'est une fonction native php
//Attention!! Il ne faut pas mettre d'espace entre le Location et le :
header("Location: ../index.php?route=home");
exit();
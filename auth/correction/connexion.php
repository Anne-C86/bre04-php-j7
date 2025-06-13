<?php
// Exemple d'utilisation des variables d'environnement dans le contexte d'une connexion à une base de données
require_once __DIR__ . '/vendor/autoload.php';

// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

// echo "<pre>";
// var_dump($db);
// echo "</pre>";
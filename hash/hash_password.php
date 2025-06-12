<?php
$passwordText = $_POST['password'];
echo $passwordText;

$hashedPassword = password_hash($passwordText, PASSWORD_DEFAULT);
echo $hashedPassword;

?>

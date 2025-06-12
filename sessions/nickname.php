<?php
session_start();
//var_dump($_POST);
$_SESSION["nickname"] = $_POST["nickname"];


echo $_SESSION["nickname"];
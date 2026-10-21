<?php
include ('../app/config.php');

// Controlador del login (se completará con la validación contra la BD)
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

header('Location: '.APP_URL.'/index.php');

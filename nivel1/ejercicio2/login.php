<?php

session_start();
require_once "validations.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

try {
    
    $userName = validateName($_POST['userName']);
    $email = validateEmail($_POST['email']);
    $phone = validatePhone($_POST['phone']);

    echo "<h2>Datos recibidos del formulario:</h2>";
    echo "El nombre de usuario recibido es: " . $userName . "<br>";
    echo "El email recibido es: " . $email. "<br>";
    echo "El teléfono recibido es: " . $phone . "<br><br>";
  
    $_SESSION['userSession'] = $userName;
    
    echo "El usuario " . $_SESSION['userSession'] . " ha iniciado sesión.<br>";

}catch (Exception $e) {
    echo $e->getMessage();
}catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}   

} else {
    
    echo "Inicia sesion desde la página principal.";
}


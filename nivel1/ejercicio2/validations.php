<?php


function validateName(string $name): string {
    $name = trim($name);
    isEmpty($name, "nombre");
    
    if (preg_match('/[0-9]/', $name)) {
        throw new InvalidArgumentException("El campo nombre no puede contener números.");
    }
    return $name;
}

public function validateEmail(string $email): string {
    $email = trim($email);
    isEmpty($email, "email");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El formato del email no es válido.");
    }
    return $email;
}

public function validatePhone(string $phone): string {
    $phone = trim($phone);
    isEmpty($phone, "teléfono");
    
    if (!preg_match('/^[0-9]{9}$/', $phone)) {
        throw new InvalidArgumentException("El formato del teléfono no es válido. Debe contener 9 números.");
    }
    return $phone;
}

public function isEmpty(string $text, string $dataName ): void {
    if (empty($text)) {
        throw new Exception("El campo " . $dataName . " no puede estar en blanco.");
    }
}

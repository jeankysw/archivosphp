<?php

class Encriptador {
    public function encriptar($metodo, $hash) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Contraseña = $_POST['contraseña'];
            $boton = $_POST['encriptar'];

            if ($boton === "md5") {
            $hash = md5($Contraseña);
        } 
            elseif ($boton === "sha1") {
                $hash = sha1($Contraseña);
            } elseif ($boton === "sha256") {
                $hash = hash('sha256', $Contraseña);
            } elseif ($boton === "aes") {
                if (!empty($Contraseña)) {
                    $clave = random_bytes(32);
                    $iv = random_bytes(16);
                    $cifrado = openssl_encrypt($Contraseña, 'aes-256-cbc', $clave, 0, $iv);
                    $hash = base64_encode($cifrado) . "\n";
                } else {
                    $hash = "El campo de contraseña está vacío";
                }
            } elseif ($boton === "") {
                $hash = "Seleccionar una opción";
            } else {
                $hash = "Opción no válida";
            }
            
            echo "CONTRASEÑA ORIGINAL: $Contraseña<br>";
            echo "=========================================== <br>";
            echo "CONTRASEÑA ENCRIPTADA : $boton : $hash";
        } else {
            echo "Error al encriptar contraseña";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Encriptador de Contraseña</title>
    <link rel="stylesheet" href="stylo.css">
</head>
<body>
   


    <form method="POST" action="">
    <h1>Encriptador de Contraseña</h1>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña">
        <br>
        <label>Método de encriptación:</label><br>
        <div class="div">        <input type="radio" name="encriptar" value="md5"> MD5 <br>
        <input type="radio" name="encriptar" value="sha1"> SHA1 <br>
        <input type="radio" name="encriptar" value="sha256"> SHA256 <br>
        <input type="radio" name="encriptar" value="aes"> AES <br>
        <br>
        </div>
        <input class="btn" type="submit" value="Encriptar">
       
        <?php
    require_once 'Encriptador.php';

    $resultadoOriginal = '';
    $resultadoEncriptado = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $encriptador = new Encriptador();
        $Contraseña = $_POST['contraseña'];
        $boton = isset($_POST['encriptar']) ? $_POST['encriptar'] : ''; 

        if (!empty($Contraseña) && !empty($boton)) {
            $resultadoOriginal = $Contraseña;
            $resultadoEncriptado = $encriptador->encriptar($boton,$resultadoOriginal,$resultadoEncriptado);

        }
    }
    ?>
    </form>

  

</body>
</html>

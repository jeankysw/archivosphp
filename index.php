<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
   $consulta = include ('./conexion.php');
   if ($consulta){
    $resultado = " SELECT * FROM  DATOS";
    $resyl_fiinal=mysqli_query($conexion,$consulta);
    if ($resultado){
        while($row = $resultado -> array());
        $id = $row['id'];
    }
   };
    
    ?>
    <div class="mostra">  <?php  echo($id) ?> </div>
</body>
</html>
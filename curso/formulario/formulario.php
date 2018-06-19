<?php
    $errores = '';
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        
        if(!empty($nombre && $correo)){
            // $nombre = trim($nombre);//quitar los espaciados
            // $nomnre = htmlspecialchars($nombre);// nos combierte los caracteres especiales en etiquetas tags
            // $nombre = stripslashes($nombre);//significa  que no meta etiquetas

            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            echo "tu nombre es: $nombre <br/>";
        }else{
            $errores .= 'porfavor agrega un nomnbre <br/>';
        }
       if(!empty($correo)){
           $correo = filter_var($correo, FILTER_SANITIZE_STRING);

           if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
               $ERRORES .= 'PORFAVOR UN CORREO VALIDO <br>';
           }else{
               echo "tu correo es: $correo";
           }
       }else{
           $errores .= "porfavor agrega un correo";
       }
    }
        
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="correo" placeholder="correo">

        <?php if(!empty($errores)): ?>
        <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>
              
        <input type="submit" name="submit">
    </form>
</body>
</html>
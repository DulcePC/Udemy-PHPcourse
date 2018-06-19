<?php 
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina2</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <h1>hola, <?php echo $_SESSION['nombre']; ?> </h1>
</body>
</html>
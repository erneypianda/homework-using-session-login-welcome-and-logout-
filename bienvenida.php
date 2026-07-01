<?php 
session_start();

if(!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

$nombreUsuario = $_SESSION["usuario"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        body {
            background-color: darkolivegreen;
            justify-content: center;
            display: flex;
            align-items: center;
            display: flex;
        }
        .bienvenida-card{
            background-color: darkgreen;
            padding: 10px;
            margin: 20px;
            text-align: center;
            border-radius: 30px;
        }
        h1 { color: #f1c40f; 
    }
        p { color: #e9abab;
        margin: 15px 0; 
    }
        .usuario {
            display: flex;
            text-align: center;
            justify-content: center;
            color: #000000;
            font-size: 24px;
            font-weight: bold;
            background-color: #e9abab;
            
        }
        .info {
            background: rgba(78,204,163,0.1);
            border: 1px solid #4ecca3;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }

    </style>
</head>
<body>
    <div class="bienvenida-card">
        <h1>bienvenido</h1>
        <p class="usuario"> <?php echo $nombreUsuario; ?></p>
        <div class="info">
            <p>Has iniciado correctamente</p>
            <p> Session guardada en el servidor</p>
            <p> si cierras esta pestana y vuelves seguiras logueado</p>

        </div>
        <a href="logout.php" class="btn-logout">Cerrar Sesion</a>


    </div>
    
</body>
</html>
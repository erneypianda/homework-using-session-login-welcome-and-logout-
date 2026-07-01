
      <?php
    session_start();
    
    if(isset($_SESSION["usuario"])){
        header("Location: bienvenida.php");
        exit();
    }
    $error = "";
    // ¿Vino de un formulario POST?

    if($_SERVER["REQUEST_METHOD"]=="POST"){

    $usuario = $_POST["usuario"] ?? "";
    $password = $_POST["password"] ??"";
// Verificamos si son correctos
    if($usuario ==="admin" && $password === "1234"){

    $_SESSION["usuario"] = $usuario;
    header("Location: bienvenida.php");
    exit();


    }else{
        $error = "Usuario y contrasena incorrectos!";
    }

    }

     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                background-color: darkgoldenrod;
                justify-content: center;
                display: flex;
                text-align: center;
                align-items: center;
                padding: 10px;
                margin: 0px;
            }
            .login-card {
                background-color: darkkhaki;
                padding: 10px;
                border-radius: 10px;
                width: 500px;
                color: white;
            }
            h1{
                color: black;
            
            }
            label{
                padding: 5px;
                margin-bottom: 2px;
                display: block;
              
            }
            input{
                box-sizing: border-box;
                width: 100%;
                padding: 15px;
            }
            button {
                width: 100 px;
                background-color: darkgrey;
                padding: 10px;
                margin-top: 20px;
            }
        </style>
     </head>
     <body>

     <div class="login-card">
        <h1>Login</h1>
        <?php if($error !== ""){?>
        <div class="error"><?php echo $error;?></div>

        <?php } ?>
        <form  method="POST" action="">

            <label>Usuario</label>
            <input type="text" name="usuario" placeholder="escribe tu usuario"><br>

              <label>Password</label>
            <input type="password" name="password" placeholder="escribe tu contrasena"><br>

            <button type="submit"> Entrar</button>
            
        </form>
        <p class="pista">Pista:admin</p>

     </div>

        
     </body>
     </html>

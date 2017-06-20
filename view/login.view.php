<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
  </head>
  
  <body>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-sm-offset-0 col-lg-offset-0" >
                    <div class="form-containerlg">
                        <div class="row">
                          <div class="col-sm-12" >
                            <div class="titulo">
                              <label for="titulo">Iniciar sesion</label>
                            </div>
                          </div>
                        </div>
                      <form role="form" method="post" action="<?php trim(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" >
                        <div class="form-group">
                            <i class="fa fa-user" aria-hidden="true"></i> <label for="usuario"> Ingresar Usuario:</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Digite Correo..." class="form-control">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>  <label for="password"> Ingresar Contraseña:</label>
                            <input type="password" name="password" id="password" placeholder="Digite Contraseña..." class="form-control"><br>
                        </div>
                        <div class="form-group">
                          <div class="recuerdame">
                            <label for="recuerdame"><input type="checkbox" name="recuerdame" id="recuerdame" value="recordarme"> Recordarme</label>
                          </div>
                        </div>
                        <input type="submit" class="btn form-control" value="Iniciar Sesion" onclick="login.submit()">
                      </form>
                      <?php if(!empty($errores)): ?>
                        <div class="form-group">
                          <div class="error">
                            <ul>
                              <?php echo $errores; ?>
                            </ul>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
   
                </div>
                <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-md-offset-1 col-md-5 col-lg-offset-2 col-lg-4">
                  <div class="form-group">
                    <div class="iniciar">
                      <strong><p>¿Aún no tienes una cuenta?</p></strong>
                      <a href="registrar_usuarios.php" class="btn form-control">Registrate</a> 
                    </div>
                  </div>
                </div>
            </div>
        </div>
                 
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
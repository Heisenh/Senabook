<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/app.css" rel="stylesheet">

</head>
<body>

<div class="container text-center">
	
	<div class="row">

		<div class="col-xs-12  col-md-5 col-lg-4">
			<div class="form-group">
				<div class="iniciar">
					<strong><p>¿Ya tienes una cuenta?</p></strong>
					<a href="login.php" class="btn form-control">Iniciar Sesion</a>	
				</div>
			</div>
		</div>

        <div class="col-xs-12  col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-2">
        		
			<div class="form-container">
        		<form role="form" method="post" action="<?php echo trim(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
	    			<div class="row">
    					<div class="form-group">
	    					<div class="titulo">
	    						<label for="titulo">Registrate!</label>
	    					</div>
    					</div>

	    				<div class="col-xs-12 col-md-6 col-lg-6">

	    					<div class="form-group">
	                			<input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre">
	    					</div>
	    				</div>

	    				<div class="col-xs-12 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						<input type="text" class="form-control" name="apellido" id="apellido"  placeholder="Apellido">
	    					</div>
	    				</div>
	    			</div>

	    			<div class="form-group">
	    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Ej. example@misena.edu.co">
	    			</div>

	    			<div class="row">

	    				<div class="col-xs-12 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
	    					</div>
	    				</div>

	    				<div class="col-xs-12 col-sm-6 col-md-6">
	    					<div class="form-group">
	    						<input type="password" name="conpassword" id="conpassword" class="form-control input-sm" placeholder="Confirmar Contraseña">
	    					</div><br>
	    				</div>
						<?php if(!empty($errores)): ?>
							<div class="error">
								<ul>
									<?php echo $errores; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
	    				<div class="col-xs-12 col-sm-12 col-md-12">
	    					<div class="form-group">
		    					<div class="fecha">
		    						<label for="fechanac">Fecha de nacimiento</label>
		    						<input class="form-control" class="form-control" type="date" name="fechanac" id="fechanac" required/>
		    					</div>
	    					</div>
						</div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
		    				<div class="form-group">
                             <div class="fecha"><label>Ciudad</label></div>
                               <select class="form-control" name="ciudad"  id="ciudad"  required>
                                 <option value="tulua" selected="selected">Tuluá</option>
                                 <option value="buga" selected="selected">Buga</option>
                                 <option value="cali" selected="selected">Cali</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="genero">
                            
                               <label><input type="radio" name="optradio" id="optradio" value="mujer">Mujer</label>
                               <label><input type="radio" name="optradio" id="optradio" value="hombre">Hombre</label>
                            
                          </div>
                        </div>	
                        <strong><a href="#">Terminos y condiciones</a></strong>
                        <div class="form-group">
                        	<div class="terminos">
                        		<label for="terminos"><input type="checkbox" name="terminos" id="terminos" value="terminos"> He leído los terminos y condiciones.</label>
                        	</div>
                        </div>
						<div class="form-group">
	    					<input type="submit" value="Crear Cuenta" class="btn form-control" onclick="login.submit()">
						</div>
    			</form>
				<?php if(!empty($correct)): ?>
					<div class="form-group">
						<div class="correct">
							<ul>
								<?php echo $correct; ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>
			</div>
    	</div>
	</div>
</div>
</body>
</html>
    
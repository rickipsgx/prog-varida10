<!DOCTYPE html>
<html lang="es">
<head>
<title>inicio - Titulo</title>
<meta charset="utf-8"/>
<link href="theme/ProgVariada/stylesheets/style.css" type="text/css" rel="stylesheet">
<!-- en la hoja de estilos fefault.css hice unos cambios para darle una mejor visat a la prte "registrate" -->
<link href="theme/ProgVariada/stylesheets/default/default.css" type="text/css" media="screen" rel="stylesheet" />
<link href="theme/ProgVariada/stylesheets/nivo-slider.css" type="text/css" media="screen" rel="stylesheet" />
<link href='theme/ProgVariada/stylesheets/osx.css' rel='stylesheet' media='screen' type='text/css' />
<!-- Slider scripts, aca empieza el primer archivo jquery -->
<!-- Jale los archivos del servidor de google, en caso de que no los pueda cargar que seria muy raro ya que los servidores de google nunca fallan, mandara a llamar el archivo de nuestro servidor en este caso el archivo se llama ("jquery.min")   -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write("<script src='theme/ProgVariada/js/jquery.min.js'><\/script>");
	</script>
<script type="text/javascript" src="theme/ProgVariada/js/jquery-1.7.1.min.js"></script>
<!-- aca empieza el segundo archivo jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write("<script src='theme/ProgVariada/js/jquery.min.js'><\/script>");
	</script>
<script type="text/javascript" src="theme/ProgVariada/js/jquery.nivo.slider.js"></script>
</head>
<body>
<!-- header -->
<header>
	<!-- logo -->
	<div id="logo">
		<h1><?php 
		$web_name = "Programacion Variada"; 
		echo $web_name;?></h1>
		<span><?php 	
		$web_eslogan = "Titulo del sitio web"; 
		echo $web_eslogan; ?></span>
	</div>
	<!-- login box -->
	<div id="login">
		<form action="#" method="post">
			<div id="date">
				<input name="user" type="text" placeholder="Usuario" />
				<input name="clave" type="password" placeholder="clave" />
			</div>
			<div id="boton">
				<input name="entrar" type="submit" value="Entrar" />
			</div>
			<div id="reg"><a href="#" class='osx'>Registrarse!</a></div>
		</form>
	</div>
</header>
<!-- modal box register -->
<div id="osx-modal-content">
	<div id="osx-modal-title">Registrarse!
	</div>
	<div class="close"><a href="#" class="simplemodal-close">x</a></div>
	<div id="osx-modal-data">
		<form name="registrate" id ="registrate" action="php/registro-datos.php" method="POST" enctype="application/multipart/form-data">
			<fieldset>
				<legend>Ingresa tus datos</legend>
				<div>
					<label for="email">Email: </label>
					<input type="email" id="email" name="email_txt" placeholder="e-mail" title="Ingresa tu e-mail" class="cambio" required/>
				</div>
				<div>
					<label for="nombre">Nombre: </label>
					<input type="text" id="nombre" name="nombre_txt" placeholder="nombre" title="Ingresa tu nombre" class="cambio" required/>
				</div>
				<div>
					<label for="usuario">Usuario: </label>
					<input type="text" id="usuario" name="usuario_txt" placeholder="usuario" title="Escoje tu usuario" class="cambio" required/>
				</div>
				<div>
					<label for="password">Password: </label>
					<input type="password" id="password" name="password_txt" placeholder="ingresa tu password" title="Ingresa tu password" class="cambio" required/>
				</div>
				<div>
					<label for="f_nacimiento">Fecha de nacimiento: </label>
					<input type="date" id="f_nacimiento" name="f_nacimiento_txt" title="Ingresa tu fecha de nacimiento" class="cambio" required/>
				</div>
				<div>
					<label for="pais">Pa&iacute;s: </label>
					<select id="pais" name="pais_slc" class="cambio"required>
						<option value="">- - - - -</option>
						<?php include("tu-pais.php"); ?>
					</select>
				</div>
				<div>
					<label for="m">Sexo: </label>&nbsp;&nbsp;&nbsp;
					<input type="radio" id="m" name="sexo_rdo" title="Escoje tu sexo" value="M" required/>
					<label for="m">Masculino: </label>&nbsp;&nbsp;&nbsp;
					<input type="radio" id="f" name="sexo_rdo" title="Escoje tu sexo" value="F" required/>
					<label for="f">Femenino: </label>
				</div>
				<div>
					<input type="submit" id="envio-registro" name="enviar_btn" class="cambio" value="Registrate :D" />
				</div>
			</fieldset>
		</form>
	</div>
</div>
<!-- Modal box scripts -->
<script type='text/javascript' src='theme/ProgVariada/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='theme/ProgVariada/js/osx.js'></script>
<!-- navegador o menu -->
<nav>
	<ul>
		<li><a href="">Inicio</a></li>
	</ul>
</nav>
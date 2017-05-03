<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
</head>	
<body>
<h1>Registrar usuario</h1>
<form>
	<label for="nombre">nombre</label>
	<input type="text" name "nombre" /><br/><br/>

	<label for="correo">correo</label>
	<input type="text" name "correo" /><br/><br/>

	<label for="usuario">usuario</label>
	<input type="text" name="usuario" /><br/>

	<label for="contraseña">contraseña</label>
	<input type="password" name="usuario" /><br/>

	<input type="submit" value="Entrar" name="submit" />
	<a href="<?=base_url().'usuarios/'?>"title="Iniciar sesion">Iniciar sesion</a>
</form>
</body>
</html>
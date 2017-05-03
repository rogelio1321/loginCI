<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
</head>	
<body>
<h1>Iniciar sesion</h1>
<form>
	<label for="Usuario">Usuario</label>
	<input type="text" name "user" /><br/><br/>
	<label for="contraseña">Contraseña</label>
	<input type="password" name="pass" /><br/>
	<input type="submit" value="Entrar" name="submit" />
	<a href="<?= base_url().'usuarios/registro'?>" title="deseo registrarme">Registrarme</a>
</form>
</body>
</html>
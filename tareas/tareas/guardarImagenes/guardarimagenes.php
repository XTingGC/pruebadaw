<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h2>Subida y alojamiento de archivo en el servidor</h2>
<form enctype="multipart/form-data" action="subirfichero.php" method="POST">
<label for="nombre">Indique su nombre</label>
<input type="text" name="nombre"><br>
<label for="directorio">Indique el nombre del directorio donde se ubicar el archivo</label>
<!-- El directorio tiene que tener la ruta completa o relativa -->
<input type="text" name="directorio" /> <br />
<!-- Se fija en el cliente el tama�o m�ximo en bytes ( no es seguro ) el limite m�ximo se debe tener
el archivo
Se debe controlar tambi�n en el servidor (php.ini)
-->
<input type="hidden" name="MAX_FILE_SIZE" value="100000" /> <!-- 100Kbytes -->
<label>Elija el archivo a subir</label> <input name="archivo1" type="file" /> <br />
<input type="submit" value="Subir archivo" />
</form>
</body>
</html>
<?php
if (!$_POST){
   //si no recibo nada por post, muestro una página con un formulario de carga de la imagen
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
   <title>enviando archivo</title>
</head>

<body>

<form action="cargar-imagen-pixrl.php" method="post" enctype="multipart/form-data"> 
<b>Enviar un nuevo archivo: </b> 
<br> 
<input name="image" type="file"> 
<br> 
<input type="submit" name="submitir" value="Enviar"> 
</form> 


</body>
</html>
<?php
}else{

   //Ver si recibo imagen en $_FILES
   if(empty($_FILES['image'])) {
      echo "No he recibido la imagen";
   exit;
   }
   //ver si es un upload error
   if($_FILES['image']['error'] != UPLOAD_ERR_OK) {
      echo "Error escribiendo el archivo al disco ". $_FILES['image']['error'];
   }
   
   //Recibo parámetros del archivo de upload
   $archivo = $_FILES['image']['tmp_name'];
   $tipo = $_FILES['image']['type'];
   $nombre_original = $_FILES['image']['name'];
   $tamano = $_FILES['userfile']['size'];
   
   //calculo la ruta donde voy a guardar el fichero
   //quizás te interesaría editar el $nombre_original para que sea único en tu servidor y no machacar otras fotos y que el nombre del archivo tampoco tenga caracteres raros que puedan molestar.
   $ruta_guardar = "images/". $nombre_original;
   
   //aquí podría validar el fichero (esto son sólo un par de validaciones de prueba)
   if (strpos($tipo_archivo, "jpg") === 0){
      echo "Sólo se permiten archivos jpg";
      exit;
   }
   if ($tamano > (1024 * 1024)){
      echo "Sólo se permiten archivos de 1 mega máximo";
   }
   
   
   //Copio el fichero en el servidor
   if(!move_uploaded_file($archivo, $ruta_guardar)) {
      echo "Error copiando el fichero";
   exit;
   }
   
   //redirijo al navegador al servicio de edición de la foto en Pixlr
   //idioma de la interfaz de pixlr
   $parametros = "loc=es";
   //imagen que queremos poner para editar
   $parametros .= "I=" . urlencode("http://www.desarrolloweb.com/probando/" . $ruta_guardar);
   //título de la imagen
   $parametros .= "&title=" . urlencode("foto");
   //página a la que redirigir en caso que se salgan de pixlr
   $parametros .= "&exit=" . urlencode("http://www.desarrolloweb.com");
   //method por el que me enviarán los datos de la imagen editada
   $parametros .= "&method=GET";
   //nombre de mi sitio web, que mostrar a la hora de guardar como
   $parametros .= "&referrer=en%20DesarrolloWeb.com";
   //página a la que se enviarán los datos de la imagen editada
   $parametros .= "&target=" . urlencode("http://www.desarrolloweb.com/probando/salvar-imagen-pixrl.php");
   
   header("Location: http://www.pixlr.com/editor/?" . $parametros);
   
}   
?>
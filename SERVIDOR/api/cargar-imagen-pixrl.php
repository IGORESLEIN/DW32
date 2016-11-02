<?php
//Recibe los parámetros que vienen por la URL (método GET)
$image = $_GET['image'];
$type = $_GET['type'];
$state = $_GET['state'];
$filename = $_GET['title'];


//Verificar que la url de la imagen viene de Pixlr
if (strpos($image, "pixlr.com") == 0){
   //Si la URL no viene de pixlr
   echo "Referencia de la imagen incorrecta";
   exit;
}
//sin embargo, esta valoración no estaría del todo segura, porque podrían colarlos alguna URL que tuviese el texto "pixlr.com" pero que no fuera realmente una imagen o no viniera realmente de este dominio.

//ahora podemos verificar que realmente el fichero es una imagen
$headers = get_headers($image, 1); //esto sólo funciona en PHP 5
$content_type = explode("/", $headers['Content-Type']);
if ($content_type[0] != "image"){
   //Si el tipo de contenido no es una imagen
   echo "Tipo de archivo inválido";
   exit;
}


//Podrías necesitar asignar un identificador único a esta imagen
//$filename = uniqid();

//define el directorio donde se gardaría la imagen
$save_path = "images/". $filename . "." . $type;

//Copiar la imagen al servidor
if(copy($image,$save_path)){
   //la función copy de PHP permite, a partir de php 4.3.0, que el origen sea una URL
   //pero sólo funcionará si en tu PHP.ini tienes la directiva allow_url_fopen activada.
   echo "Hemos copiado correctamente la foto<p>";
   echo '<img src="' . $save_path . '">';
}else{
   //si hubo un error en la copia, lo informo
   echo "No se ha podido copiar la foto";
}

//Podrás necesitar meter la imagen en la base de datos o hacer otro tipo de acciones
?>
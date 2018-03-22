<?php 
//Creamos una función que detecte el idioma del navegador del cliente. 
function traeLenguage() { 
$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
return $idioma; 
}
//Llamamos a la función y guardamos el idioma en una variable 
$idiomaUsuario = traeLenguage(); 
 
//De acuerdo al idioma hacemos las redirecciones según el lenguaje del navegador
if($idiomaUsuario=='en'){
header( 'Location: http://hormik.mx/en/home.html' ); 
} 
elseif($idiomaUsuario=='cn'){ 
header( 'Location: http://hormik.mx/cn/home.html' ); 
}
elseif($idiomaUsuario=='zh'){ 
header( 'Location: http://hormik.mx/cn/home.html' ); 
}
else { 
header( 'Location: http://hormik.mx/home.html' ); 
} 
?>
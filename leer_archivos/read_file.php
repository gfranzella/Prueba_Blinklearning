<?php
/*$myfile = file("texto_prueba.txt") or die("Unable to open file!");
echo fread($myfile,filesize("texto_prueba.txt"));

while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
	
}

fclose($myfile);*/

/*
$mystring = "esto es una gran cadena";
$palabras = preg_split("/[\s,]+/", $mystring);

foreach ($palabras as $key => $palabra) {
	# code...
	echo strrev($palabra) . "<br>";
}
*/


$myfile = file("texto_prueba.txt") or die("Unable to open file!");
foreach ($myfile as $num_línea => $linea) {
	$palabras = preg_split("/[\s,]+/", trim($linea));
	foreach ($palabras as $numero => $palabra) {
		# code...
		echo "palabra inversa: " . strrev($palabra) . "<br>";
	}
	
}


?>
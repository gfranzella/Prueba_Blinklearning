<?php

/
$ar = array("1"=>9,4,3,0);
//echo is_array($ar);
//echo $ar[0];
echo "el resultado es ".sumaArray($ar);

function sumaArray($ar)
{
	$sum1 = 0;
	$sum2 = 0;
	
	foreach ($ar as $valor)
	{
		if(is_array($valor))
		{
			$sum2 = sumaArray($valor);
		}
		elseif(is_numeric($valor))
		{
			$sum1 += $valor;				
		}
		
	}
	return $sum1+$sum2;
}

/*
$i=0;
while ($i=1) 
{
	echo ++$i;
}*/

echo "<br>";
echo "<br>";
echo "<br>";


?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

	function prueba(){
		$("li").on('click', '.borrar', function() {
				$(this).closest('li').remove();
			});
	}
	$(document).ready(function(){
		/*$(".agregar").click(function(){
			$("div ul li:last").append("<li>"+$("#nombre_fruta").val()+" <button class=\"borrar\" type=\"button\">Borrar</button></li>");
			
			$("div ul li:last").on('click', '.borrar', function() {
			$(this).closest('li').remove();
			});
		});
		
		
		$('li').on('click', '.borrar', function() {
			$(this).closest('li').remove();
		});
		*/
		
		$(".agregar").click(function(){
			$("div ul:last").append("<li>"+$("#nombre_fruta").val()+" <button class=\"borrar\" type=\"button\">Borrar</button></li>");
			 
			prueba();
			
		});
		
		/*$('li').on('click', '.borrar', function() {
			$(this).closest('li').remove();

		});*/

		prueba();
	});
	</script>
</head>
<body>
	<div id="nombre">
		<span>Nombre: </span>
		<input id="nombre_fruta" class="texto" type="text">
		<button type="button" class="agregar" >Agregar</button>
	</div>
	<div id="listado_frutas">
		<ul class="lista">
			<li>
				Pera <button class="borrar" type="button" >Borrar</button>
			</li>
			<li>
				Manzana <button class="borrar" type="button">Borrar</button>
			</li>
			<li>
				Naranja <button class="borrar" type="button">Borrar</button>
			</li>
		</ul>
	</div>
	
</body></html>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Primera Pagina Atom Versionada en Git</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="first.js"></script>
	</head>
	<body>
				  <h1 id="TITULO">HOLANDA </h1><br><br><br><br>
		<div>
		  <h5>Ejemplo de div y span </h5>
		   <p>
		    Esto es un párrafo dentro de un div,
		     <span style="color: red;"> y esto un span dentro de un párrafo. </span>
		   </p>
		 </div>
<div>
	<a href="http://www.meristation.com" title="IR A LA PAGINA DE MERISTATIÓN">LINK A MERISTATION</a>
</div>
<div id="container">
	 <ul class="menu">
      <li>Lista 1, Ítem 1</li>
      <li>Lista 1, Ítem 2</li>
			</ul>
			<ul class="menu">
      <li id="gradiente">Lista 2, Ítem 1</li>
      <li>Lista 2, Ítem 2</li>
	</ul>
</div>
<div>
	<p>acá esta el formulario
<form  id="formulario">
 <label for="fname">Usuario:</label>
 <input type="text" id="fname" name="fname"><br><br>
 <label for="lname">Contraseña:</label>
 <input type="password" id="password" name="password"><br><br>
 <input type="submit" value="Submit"><br><br>
 <label for="testo">Esto esta deshabilitado xdd</label>
 <input type="text" id="testo" name="testo" disabled="disabled"><br><br>
</form>
</p>
</div>

<div>
	<section>
	  <p class="seccion">Ésta es una sección de la página.</p>
	  <p class="seccion">Otro párrafo, dentro de la misma sección.</p>
	</section>
</div>

	<div>	<section class="seccionjq">
<p class="jq">Si haces click en "Esconder" voy a esconderme lentamente.
	<br>Al apretar "Mostrar" vas a hacerme aparecer lentamente.
	<br>Al apretar "Mover" vas a moverme un momento mientras cambia mi opacidad.

<br><br>Esto es posible gracias a la libreria Jquery</p>	</section>

<button id="hide">Esconder</button>
<button id="show">Mostrar</button>
<button id="move">Mover</button>

</div>

	<div><h3>Título principal</h3>

<section>
  <h1>Título de la section</h1>
  <p>Ésta es una sección de la página.</p>
  <p>Otro párrafo, dentro de la misma sección.</p>
</section>
</div>
<div>
<aside>
  <h4>Título del aside</h4>
  <p>Información secundaria.</p>

	<p>
	  La construcción va por el <progress value="70" max="100">70%</progress>.
	</p>
</div>

	</body>

</html>

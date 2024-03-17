<?php

// INTRUCCIONES PARA DEBUGEAR

// echo "console.log(" . json_encode('hola') . ");"; esto si que funciona
// die('<script>console.log('.json_encode( 'hola' ) .');</script>'); esto si que funciona


//isset($_GET['page']): 
//Verifica si la variable $_GET['page'] 
//está definida en la URL. 
//$_GET es una superglobal en PHP que se utiliza para recoger datos enviados a través de una solicitud GET. 
//Si page está presente en la URL, entonces isset devuelve true.

// $_GET['page']==="ctrl_home":
// Comprueba si el valor de $_GET['page'] es estrictamente igual (tanto en valor como en tipo) a la cadena "ctrl_home". 
// Si esta condición es verdadera, significa que la página solicitada es "ctrl_home".

if ((isset($_GET['page'])) && ($_GET['page'] === "ctrl_home")) { //Si la página solicitada es "ctrl_home"
	include("view/inc/top_page_home.php");

} else if ((isset($_GET['page'])) && ($_GET['page'] === "ctrl_shop")) { //Si la página solicitada es "ctrl_shop"

	include("view/inc/top_page_shop.php");
} else {
	include("view/inc/top_page_home.php");
}

// La función session_start() en PHP se utiliza para iniciar una nueva sesión o reanudar la sesión existente en el servidor.
session_start();
?>

<!-- Este código PHP y HTML está estructurado incluye secciones de otras paginas web como header, menu, pages y footer. 
	 utilizando la función INCLUDE.  -->

<div id="wrapper">
	<!--wrapper es un contenedor que contiene todos los elementos de la página web.-->
	<div id="header">
		<!-- header es la cabecera de la página web.-->
		<?php
		include("view/inc/header.php");
		?>
	</div>

	<div id="pages">
		<!-- pages es el cuerpo de la página web.-->
		<?php
		include("view/inc/pages.php");
		?>
		<br style="clear:both;" />
	</div>

	<div id="footer">
		<!-- footer es el pie de la página web.-->
		<?php
		include("view/inc/footer.php");
		?>
	</div>

</div>
<?php
include("view/inc/bottom_page.php");  // bottom_page es el final de la página web. en este caso esta vacia
?>
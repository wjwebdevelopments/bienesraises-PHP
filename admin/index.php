<?php require '../includes/funciones.php';
	addTemplate('header');
	$resultado = $_GET['resultado'];
?>

<div class="contenedor seccion">
	<h1>Api Index</h1>
	<p align="center">Administrador de Bienes Raices</p>

	<?php if ( intval($resultado) === 1 ): ?>
		<p class="alerta exito">Anuncio creado correctamente</p>
	<?php endif ?>

	<a class="boton-verde" href="/admin/propiedades/crear.php">Nueva propiedad</a>
</div>

<?php 
	addTemplate('footer');
?>

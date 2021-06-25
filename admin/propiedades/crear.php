<?php 
	require '../../includes/funciones.php';
	require '../../includes/config/database.php';

	//- Database connections
	$db = conectarDB();
	
	//- Agrege templates
	addTemplate('header');
	
	//- Leer vendedores de la base de datos;
	$consult = 'SELECT * FROM vendedores';
	$mysqli_result = mysqli_query($db, $consult);

	//- Arreglo con mensaje de errores
	$errores = [];

	// Declaracion de variables
	$titulo = '';
	$precio = '';
	$descripcion = '';
	$habitaciones = '';
	$wc = '';
	$estacionamiento = '';
	$vendedorId = '';


	//- Ejecutar del codigo despues de que el usuario envia el formulario
	if ( $_SERVER["REQUEST_METHOD"] === "POST" ) {
		

		// Sanitizar para evitar InjectSQL y Cross Site Scripting
		// https://www.php.net/manual/es/filter.filters.php
		$titulo = mysqli_real_escape_string($db, $_POST['titulo']);
		$precio = mysqli_real_escape_string($db, $_POST['precio']);
		$descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
		$habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
		$wc = mysqli_real_escape_string($db, $_POST['wc']);
		$estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
		$vendedorId = mysqli_real_escape_string($db, $_POST['vendedorId']);
		$creado = Date('Y/m/d');
		$imagen = $_FILES['imagen'];

		// echo "<pre>";
		// var_dump($_FILES);
		// echo "</pre>";

		if (!$titulo) {
			$errores[] = 'El titulo es oblicatorio';
		}
		if (!$precio) {
			$errores[] = 'El precio es oblicatorio';
		}
		if (strlen($descripcion) < 50) {
			$errores[] = 'La descripcion es oblicatoria y debe tener al menos 50 caracteres';
		}
		if (!$habitaciones) {
			$errores[] = 'Las habitaciones son requeridas';
		}
		if (!$wc) {
			$errores[] = 'Los baños son oblicatorios';
		}
		if (!$estacionamiento) {
			$errores[] = 'El estacionamiento es oblicatorio';
		}
		if (!$vendedorId) {
			$errores[] = 'Elige un vendedor';
		}
		if (!$imagen['name']) {
			$errores[] = 'La imagen de la propiedad es obligatoria';
		}

		// Ponerle un limite a la imagen que el usuario va a subir MAXIMO 1M
		$medida = 1000 * 1000;
		if ($imagen['size'] > $medida) {
			$errores[] = 'La imagen es muy pesada';
		}

		if (empty($errores)) {

			// SUBIDA DE ARCHIVO 

			/** 1ro. Crear Carpeta */
			$dir = '../../imagenes/';
			if ( !is_dir($dir) ) {
				mkdir($dir);
			}

			/** 2do. Darle un nombre a la imagen */
			$nombre_imagen = md5(uniqid(rand(), true)).".jpg";

			/** 3ro. Subir la imagen */
			move_uploaded_file($imagen['tmp_name'], $dir . $nombre_imagen);

			/** 4to Se guarda el registro en la base de datos con la referencia a la imagen creada */
			$query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$nombre_imagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

			$resultado = mysqli_query($db, $query);

			if ($resultado) {
				header('location: /admin?resultado=1'); // query string
			} 
		}


	}

?>

<div class="contenedor seccion">
	<h1>Api Crear</h1>
	<p align="center">Crear una nueva propiedad</p>

	<a class="boton-verde" href="/admin/index.php">Volver</a>

	<!-- Imprimiendo los errores en el HTML -->
	<?php foreach($errores as $error): ?>
		<div class="alerta error">
			<?php echo $error ?> 
		</div>
	<?php endforeach; ?>

	<form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
		
		<fieldset>
			<legend>Información general</legend>
			<label for="titulo">Titulo</label>
			<input 
				type="text" 
				name="titulo" 
				placeholder="Titulo de la propiedad" 
				value="<?php echo $titulo; ?>">

			<label for="precio">Precio</label>
			<input 
				type="number" 
				name="precio" 
				placeholder="Precio de la propiedad"
				value="<?php echo $precio; ?>">

			<label for="imagen">Imagen</label>
			<input type="file" name="imagen" accept="image/jpeg, image/png">

			<label for="descripcion">Descripción</label>
			<textarea 
				type="text" 
				name="descripcion" 
				placeholder="Descripcion de la propiedad">
					<?php echo trim($descripcion); ?>
				</textarea>
		</fieldset>

		<fieldset>
			<legend>Información de la propiedad</legend>

			<label for="habitaciones">Habitaciones</label>
			<input 
				type="number" 
				min="1" max="9" 
				name="habitaciones" 
				placeholder="Ej: 3"
				value="<?php echo $habitaciones; ?>">

			<label for="wc">Baños</label>
			<input 
				type="number" 
				min="1" 
				max="9" 
				name="wc" 
				placeholder="Ej: 3"
				value="<?php echo $wc; ?>">

			<label for="estacionamiento">Estacionamientos</label>
			<input 
				type="number" 
				min="1" 
				max="9" 
				name="estacionamiento" 
				placeholder="Ej: 3"
				value="<?php echo $estacionamiento; ?>">
		</fieldset>

		<fieldset>
			<legend>Vendedor</legend>
			<label for="vendedor">Vendedor</label>
			<select name="vendedorId" id="vendedor">
				<option value=""> -- Seleccionar -- </option>
				<?php while( $row = mysqli_fetch_assoc($mysqli_result) ): ?>
					<option 
						<?php echo($vendedorId === $row['id']) ? 'selected' : ''; ?> 
						value="<?php echo $row['id'] ?>">
							<?php echo $row['nombre'] ?>
					</option>
				<?php endwhile; ?>	
			</select>
		</fieldset>

		<input type="submit" value="Crear propiedad" class="boton-verde">

	</form>
</div>

<?php 
	addTemplate('footer');
?>


<!DOCTYPE html>
<html lang="en">
	<!-- **********************************************HEAD****************************************************** -->
<head>
	<meta charset="UTF-8">
	<title>Template</title>

	<link rel="stylesheet" href="views/modules/css/style.css">
	<script src="views/js/jquery-3.0.0.min.js">	</script>

</head>
	<!-- **********************************************FIN DE HEAD****************************************************** -->

		<!-- **********************************************BODY****************************************************** -->
			<body>

			<?php include "modules/navegacion.php"; ?>

					<section>

					<?php

					$mvc = new MvcController();
					$mvc -> enlacesPaginasController();

					 ?>
					 
					</section>
					<script src="views/js/validarRegistro.js"></script>

			</body>
	<!-- **********************************************FIN BODY****************************************************** -->

</html>

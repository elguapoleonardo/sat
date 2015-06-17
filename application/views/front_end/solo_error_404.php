<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>404 Error Page - Ace Admin</title>

		<meta name="description" content="404 Error Page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>							
							<div class="error-container">
								<div class="well">
									<h1 class="grey lighter smaller">
										<span class="blue bigger-125">
											<i class="icon-sitemap"></i>
											404
										</span>
										Página No Encontrada
									</h1>

									<hr />
									<div class="alert alert-info">
									<button type="button" class="close" data-dismiss="alert">
											<i class="icon-remove"></i>
										</button>
									<h1 class="lighter smaller">
									Busqueda realizada pero no se pudo encontrar lo solicitado!
									<br>
									<strong>Alerta!</strong>
									Posiblemente este modulo este en proceso de construccion!
									</h1>
									</div>
									<div>
										<form class="form-search" />
											<span class="input-icon">
												<i class="icon-search"></i>

												<input type="text" class="input-medium search-query" placeholder="Hacer una búsqueda ..." />
											</span>
											<button class="btn btn-small" onclick="return false;">Ir</button>
										</form>

										<div class="space"></div>
										<h4 class="smaller">Pruebe una de posibles soluciones siguientes:</h4>

										<ul class="unstyled spaced  bigger-110">
											<li>
												<i class="icon-hand-right blue"></i>
												compruebe la URL.
											</li>
											
											<li>
												<i class="icon-hand-right blue"></i>
												Leer preguntas frecuentes.
											</li>

											<li>
												<i class="icon-hand-right blue"></i>
												Informar sobre el problema al respecto
											</li>
										</ul>
									</div>

									<hr />
									<div class="space"></div>

									<div class="row-fluid">
										<div class="center">
											<a href="javascript:window.history.back();" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												Volver atras
											</a>

											<a href="<?php echo base_url();?>home" class="btn btn-primary">
												<i class="icon-dashboard"></i>
												Inicio
											</a>
										</div>
									</div>
								</div>
							</div><!--PAGE CONTENT ENDS-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
	</body>
</html>

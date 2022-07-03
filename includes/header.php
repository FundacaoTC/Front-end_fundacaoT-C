<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Header | Fundação T&C</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">


	<!--GLTG Stylesheet [ REQUIRED ]-->
	<link rel="stylesheet" href="./css/style.min.css">
	<link href="./css/header.css" rel="stylesheet">

	<!--=================================================-->

</head>
<!-- BACKGROUND IMAGE -->

<body>
	<!--Barra de Navegação-->
	<!--Barra de Navegação-->
	<nav class="navbar bg-purple rounded-4 mt-4">
		<div class="container-fluid">
			<a class="navbar-brand image_logo" href="index.html"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end bg-purple" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link" href="#">Cursos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Guia Cultural</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Professores</a>
						</li>
						<li class="nav-item text-center">
							<button type="button" class="btn btn-lg btn-purple mx-3" id="log-in" href="./cadastro1.html">Cadastrar</button>
						</li>
						<li class="nav-item text-center">
							<button type="button" class="btn btn-lg btn-purple" href="./cadastro1.html">Entrar</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!--jQuery-->
	<script src="./js/jquery.min.js"></script>

	<!--Funções do JS-->
	<script src="./js/funtion.min.js"></script>

	<!--BootstrapJS-->
	<script src="./bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
	<!--Fim da Barra de Navegação-->
</body>

</html>
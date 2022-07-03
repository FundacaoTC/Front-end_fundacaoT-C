<?php 
    $pdo = require './php/connect.php';
	error_reporting(E_ERROR | E_PARSE);
    if(isset($_POST['email'])){


        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = 'select * from usuario where email = ? limit 1';

        $prepare = $pdo->prepare($sql);

        $prepare->bindParam(1, $email);
        $prepare->execute();

        $usuario = $prepare->fetch(PDO::FETCH_ASSOC);
        if(password_verify($senha, $usuario['senha'])){
            echo "Logado";
            

            session_start();
            $_SESSION['nome'] = $usuario['nome'];
            echo $_SESSION['nome'];
            header('Location: cadastro_concluido.php');
        }else{
            $error =  "<div class='alert alert-danger'>
			<button class='close' data-dismiss='alert'><i class='pci-cross pci-circle'></i></button>
				<strong>Oh snap!</strong> Email ou senha incorretos.
				</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Paginda de Login | Fundação T&C</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="./css/style.min.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">

	<!--=================================================-->

</head>

<!-- BACKGROUND IMAGE -->

<body>
	<div id="container" class="cls-container">
		<!--Barra de Navegação-->
		<?php 
			include_once './includes/header.php';
		?>
		<!--Fim da Barra de Navegação-->
		<!--===================================================-->
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<div class="mb-1">
						<h1 class="h3 text_white media-body text-left text-bold text-main mb-3">Logue-se com</h1>
						<div class="media pt-2 bord-top">
							<div class="pull-right">
								<a href="#" class="pad-rgt"><img src="./assets/login_google.svg" alt="" width="15%"
										class="login-icon"></a>
								<a href="#" class="pad-rgt"><img src="./assets/login_linkedin.svg" alt="" width="15%"
										class="login-icon"></a>
								<a href="#" class="pad-rgt"><img src="./assets/login_facebook.svg" alt="" width="15%"
										class="login-icon"></a>
							</div>
						</div>
					</div>
					<p class="media-body text-left text-bold text-main bord-top text_white"><br>Ou entre com sua conta
						T&C</p>

					<form action="" method="post">
						<div class="form-group">
							<input type="email" class="form-control email" id="exampleFormControlInput1"
								placeholder="Email" name="email" autofocus>
						</div>
						<div class="form-group">
							<input type="password" class="form-control senha" id="exampleInputPassword1"
								placeholder="Senha" name="senha">
						</div>
						<button class="btn btn-purple btn-lg btn-block text_white" type="submit">Logar</button>
					</form>
					<div>
						<?php 
							echo $error
						?>
					</div>
				</div>

				<div class="pad-all">
					<a href="pages-password-reminder.html" class="btn-link mx-2 text_white">Esqueceu a senha?</a>
					<a href="pages-register.html" class="btn-link text_white">Criar uma conta</a>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<img src="./assets/wave.svg" alt="Ondas do Rodapé" width="100%">
	</footer>
	<!--===================================================-->
	<!-- END OF CONTAINER -->



	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery-->
	<script src="./js/jquery.min.js"></script>

	<!--Funções do JS-->
	<script src="./js/funtion.min.js"></script>

	<!--BootstrapJS-->
	<!--=================================================-->

</body>

</html>
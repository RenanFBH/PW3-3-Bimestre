<!DOCTYPE html>
<html lang="pt-br">
	<!-- Head -->
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="CRUD-PW3-2025" />
		<meta property="og:url" content="http://projetopw2024.great-site.net/" />
		<meta property="og:image" content="css/logo.ico" />
		<meta name="keywords" content="CRUD, PHP, Bootstrap, Sistema Web, MySQL, PW3 2025">
		<meta name="author" content="Renan e Gustavo">
		<link rel="icon" type="image/x-icon" href="css/logo.ico">		
		<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../css/fontawesome/all.min.css">
		<link rel="stylesheet" href="../css/estilo.css">	
		<title>CRUD com Bootstrap</title>
	</head>
	<body style="background:url('css/bg2.jpg') no-repeat center; background-size:cover;">   
		<nav class="navbar" style="background-color: #13070d;" data-bs-theme="light">
			<div class="container-fluid">
				<a class="navbar-brand" style="color:#fff" href="{{ route('gerentes.index') }}">Gerentes</a>
			</div>
		</nav>
		<main>
			<div class="container">
				<h3 class="mt-3 text-center" style="background-color:#f9f6f4; padding:10px; border-radius:10px;">TABELA DE CRUD DE GERENTES</h3>
					@yield('content')
			</div>
		</main>
		<!-- Footer -->
		<footer class="footer-class text-white pt-2 pb-4"> 
			<div class="container text-center text-md-left">
				<div class="row text-center text-md-left">
					<div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
						<h5 class="text-uppercase mb-4 font-weight-bold footer-title">Empresa</h5>
						<p>&copy;2024 - <?php $data = new Datetime("now", new DateTimeZone("America/Sao_Paulo")); echo $data->format("Y"); ?>  - RENAN E GUSTAVO</p>	
					</div>
					<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
						<h5 class="text-uppercase mb-4 font-weight-bold footer-title">Fornecedores</h5>
						<p>Trabalhamos com fornecedores comprometidos com a qualidade, responsabilidade e eficiência. Valorizamos parcerias sólidas para garantir os melhores resultados aos nossos clientes.</p>
					</div>
					<div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
						<h5 class="text-uppercase mb-4 font-weight-bold footer-title">Redes Sociais</h5>
						<div class="row">
							<a href="#" class="mt-2 footer-links"><i class="fa-brands fa-facebook fa-xl"></i> Facebook</a>
							<a href="#" class="mt-2 footer-links"><i class="fa-brands fa-instagram fa-xl"></i> Instagram</a>
							<a href="#" class="mt-2 footer-links"><i class="fa-brands fa-whatsapp fa-xl"></i> Whatsapp</a>
							<a href="#" class="mt-2 footer-links"><i class="fa-brands fa-linkedin fa-xl"></i> Linkedin</a>
						</div>
					</div>
				</div>
			</div>
		</footer>	
		<script src="js/jquery-3.7.1.js"></script>
		<script src="js/fontawesome/all.min.js"></script>
		<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
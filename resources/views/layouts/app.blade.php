<!DOCTYPE html>
<html lang="pt-br">
	<!-- Head -->
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content="CRUD-PW3-2025" />
		<meta property="og:url" content="http://projetopw2024.great-site.net/" />
		<meta property="og:image" content="<?php echo BASEURL; ?>css/logo.ico" />
		<meta name="keywords" content="CRUD, PHP, Bootstrap, Sistema Web, MySQL, Laravel, PW3 2025">
		<meta name="author" content="Renan e Gustavo">
		<link rel="icon" type="image/x-icon" href="<?php echo BASEURL; ?>css/logo.ico">		
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/fontawesome/all.min.css">
		<link rel="stylesheet" href="<?php echo BASEURL; ?>css/estilo.css">	
		<title>@yield('title')</title>
	</head>
	<!-- Body -->
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand me-auto" href="@if(Auth::check()){{ route('index') }}@else {{ route('login.form') }} @endif"><i class="fa-solid fa-house"></i> CRUD-PHP</a>			
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fa-solid fa-house"></i> CRUD-PHP</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body d-flex justify-content-between align-items-center w-100">
@if(Auth::check())
						<ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
							<div class="w-100 d-flex d-lg-none justify-content-center my-3">
								<img src="@if(auth()->user()->photo != ''){{ auth()->user()->photo }}@endif" alt="Foto do Usuário" class="rounded-4 nav-link-2" id="foto-usuario"/>
							</div>
							<a href="<?php echo BASEURL; ?>inc/login.php" class="login-button d-block d-lg-none" id="login-mobile">
								<i class="fa-solid fa-right-to-bracket"></i> Login
							</a>

							<li class="nav-item margin-nav-link">
								<div class="dropdown">
									<a class="nav-link mx-lg-2 dropdown-toggle text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fa-solid fa-cart-shopping"></i> 
										Produtos
									</a>
									<ul class="dropdown-menu text">
										<li>
											<a class="dropdown-item" href="{{ route('products.create') }}"><i class="fa-solid fa-cart-plus"></i> Novo Produto</a>
										</li>
										<li>
											<a class="dropdown-item" href="{{ route('products.index') }}"><i class="fa-solid fa-cart-shopping"></i> Gerenciar Produtos</a>
										</li>								
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown">
									<a class="nav-link mx-lg-2 dropdown-toggle text" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fa-solid fa-user-tie"></i> 
										Gerentes
									</a>
									<ul class="dropdown-menu text">
										<li>
											<a class="dropdown-item" href="{{ route('gerentes.create') }}"><i class="fa-solid fa-user-plus"></i> Novo Gerente</a>
										</li>
										<li>
											<a class="dropdown-item" href="{{ route('gerentes.index') }}"><i class="fa-solid fa-users"></i> Gerenciar Gerentes</a>
										</li>								
									</ul>
								</div>
							</li>
							<li class="nav-item margin-nav logout-nav" style="display:none;">
								<a class="nav-link mx-lg-2" href="<?php echo BASEURL; ?>inc/logout.php">
									<i class="fa-solid fa-right-from-bracket"></i> 
									Logout
								</a>
							</li>	
						</ul>
						<div class="d-flex align-items-center ms-auto margin-offcanvas">	
							<a href="{{ route('login.logout') }}" class="login-button login-mobile-2 d-none d-lg-block" id="login-mobile">
								<i class="fa-solid fa-right-to-bracket"></i> Sair
							</a>
						</div>
@endif
					</div>
				</div>
				<button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</nav>
		<!-- Main -->
		<main class="main-class">
			<div class="container">
@yield('conteudo')
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
		<script src="<?php echo BASEURL; ?>js/jquery-3.7.1.js"></script>
		<script src="<?php echo BASEURL; ?>js/fontawesome/all.min.js"></script>
		<script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.bundle.min.js"></script>
		<script src="<?php echo BASEURL; ?>js/main.js"></script>
		<script src="<?php echo BASEURL; ?>js/script.js"></script>
	</body>
</html>
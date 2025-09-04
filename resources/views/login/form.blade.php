@extends('layouts.app')
@section('title', 'CRUD - Index gerentes')
@section('conteudo')
@if ($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif
@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
				<div class="login-container margin" id="login-container">
					<div class="form-container sign-up">
						<form>
							<h1>Como Entrar?</h1>
							<p>É necessário que você faça parte da empresa e tenha uma conta de Usuário, caso esteja com problemas no login, clique no link abaixo.</p>
							<a href="#">Esqueceu a senha?</a>
						</form>
					</div>
					<div class="form-container sign-in">
						<div class="form-container sign-in">
							<form action="{{ route('login.auth') }}" method="post">
								@csrf

								<h1>Login</h1>
								<input type="text" placeholder="Usuário" id="log" name="name">
								<input type="Password" placeholder="Senha" id="pass" name="password">
								<a href="#">Esqueceu a senha?</a>
								<button type="submit">Entrar</button>
							</form>
						</div>
					</div>
					<div class="toggle-container">
						<div class="toggle">
							<div class="toggle-panel toggle-left">
								<h1>Voltar ao Login</h1>
								<button class="hidden" id="login">Voltar</button>
							</div>
							<div class="toggle-panel toggle-right">
								<h1>Como Entrar?</h1>
								<button class="hidden" id="register">Ver mais</button>
							</div>
						</div>
					</div>
				</div>
@endsection
@extends('layouts.app')
@section('title', 'CRUD - Criar gerente')
@section('conteudo')
				<div class="row justify-content-center mt-3">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">
								<div class="float-start">
								   Adicionar novo gerente
								</div>
								<div class="float-end">
									<a href="{{ route('gerentes.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
								</div>
							</div>
							<div class="card-body">
								<form action="{{ route('gerentes.store') }}" method="post" enctype="multipart/form-data" class="row">
									@csrf
									<div class="col-lg-4">
										<div class="box">
											<div class="input-box" id="uploadArea">
												<h2 class="upload-area-title">Imagem do Gerente</h2>
												<div class="upload-wrapper" style="position:relative; width:100%; height:100%;">
													<input type="file" id="upload" name="foto" accept=".png, .jpg, .jpeg, .gif" hidden>
													<input type="hidden" name="remove_foto" id="remove_foto" value="0">
													<label for="upload" class="uploadlabel" id="uploadLabel"style="display:none; position:absolute; top:0; left:0; width:100%; height:100%;">
														<span><i class="fa fa-cloud-upload"></i></span>
														<p>Clique para fazer Upload</p>
													</label>
													<img id="imgPreview" src="fotos/semimagem.jpg" style="display: block; width: 100%; margin-top: 10px;" />									
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-8 row mobile-register">
									<div class="mb-3 row">
										<label for="nome" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
										<div class="col-md-6">
										  <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}">
@error('nome')
												<span class="text-danger">{{ $message }}</span>
@enderror
										</div>
									</div>
									<div class="mb-3 row">
										<label for="endereco" class="col-md-4 col-form-label text-md-end text-start">Endereço</label>
										<div class="col-md-6">
										  <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
@error('endereco')
												<span class="text-danger">{{ $message }}</span>
@enderror
										</div>
									</div>
									<div class="mb-3 row">
										<label for="depto" class="col-md-4 col-form-label text-md-end text-start">Departamento</label>
										<div class="col-md-6">
											<input type="text" class="form-control @error('depto') is-invalid @enderror" id="depto" name="depto" value="{{ old('depto') }}">								
@error('depto')
												<span class="text-danger">{{ $message }}</span>
@enderror
										</div>
									</div>
									<div class="mb-3 row">
										<label for="datanasc" class="col-md-4 col-form-label text-md-end text-start">Data de Nascimento</label>
										<div class="col-md-6">
										  	<input type="date" step="0.01" class="form-control @error('datanasc') is-invalid @enderror" id="datanasc" name="datanasc" value="{{ old('datanasc') }}">
@error('datanasc')
												<span class="text-danger">{{ $message }}</span>
@enderror
										</div>
									</div>
									<div class="mb-3 row">
										<label for="foto" class="col-md-4 col-form-label text-md-end text-start">Foto</label>
										<div class="col-md-6">
											<input type="text" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">{{ old('foto') }}</input>
@error('foto')
												<span class="text-danger">{{ $message }}</span>
@enderror
										</div>
									</div>
									<div class="mb-3 row">
										<input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Adicionar gerente">
									</div>
</div>									
								</form>
							</div>
						</div>
					</div>    
				</div>   
@endsection
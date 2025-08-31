@extends('layouts.app')
@section('content')
				<div class="row justify-content-center mt-3">
					<div class="col-md-12">
@session('success')
							<div class="alert alert-success" role="alert">
								{{ $value }}
							</div>
@endsession
						<div class="card" style="background-color:#f9f6f4;">
							<div class="card-header">Lista</div>
							<div class="card-body">
								<a href="{{ route('gerentes.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Adicionar Gerente</a>
								<table class="table table-striped table-bordered">
									<thead>
									  <tr>
										<th scope="col">ID</th>
										<th scope="col">Nome</th>
										<th scope="col">Endereço</th>
										<th scope="col">Depto</th>
										<th scope="col">Datanasc</th>
										<th scope="col">Foto</th>
									  </tr>
									</thead>
									<tbody>
@forelse ($gerentes as $gerente)
										<tr>
											<th scope="row">{{ $loop->iteration }}</th>
											<td>{{ $gerente->nome }}</td>
											<td>{{ $gerente->endereco }}</td>
											<td>{{ $gerente->depto }}</td>
											<td>{{ $gerente->datanasc }}</td>
											<td>
												<form action="{{ route('gerentes.destroy', $gerente->id) }}" method="post">
@csrf
@method('DELETE')
													<a href="{{ route('gerentes.show', $gerente->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
													<a href="{{ route('gerentes.edit', $gerente->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   
													<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this gerente?');"><i class="bi bi-trash"></i> Delete</button>
												</form>
											</td>
										</tr>
@empty
										<td colspan="6">
											<span class="text-danger">
												<strong>Nenhum gerente encontrado!</strong>
											</span>
										</td>
@endforelse
									</tbody>
								  </table>{{ $gerentes->links() }}
							</div>
						</div>
					</div>    
				</div>
@endsection
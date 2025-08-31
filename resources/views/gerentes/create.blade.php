@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Gerente
                </div>
                <div class="float-end">
                    <a href="{{ route('gerentes.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('gerentes.store') }}" method="post">
                    @csrf

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
                        <label for="depto" class="col-md-4 col-form-label text-md-end text-start">Depto</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('depto') is-invalid @enderror" id="depto" name="depto" value="{{ old('depto') }}">
                            @error('depto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="datanasc" class="col-md-4 col-form-label text-md-end text-start">Datanasc</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('datanasc') is-invalid @enderror" id="datanasc" name="datanasc" value="{{ old('datanasc') }}">
                            @error('datanasc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-md-4 col-form-label text-md-end text-start">Foto</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">{{ old('foto') }}</textarea>
                            @error('foto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Product">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
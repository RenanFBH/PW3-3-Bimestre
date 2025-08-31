@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Gerente Information
                </div>
                <div class="float-end">
                    <a href="{{ route('gerentes.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="nome" class="col-md-4 col-form-label text-md-end text-start"><strong>Nome:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $gerente->nome }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-end text-start"><strong>Endereço:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $gerente->endereco }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="depto" class="col-md-4 col-form-label text-md-end text-start"><strong>Depto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $gerente->depto }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="datanasc" class="col-md-4 col-form-label text-md-end text-start"><strong>Datanasc:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $gerente->datanasc }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="foto" class="col-md-4 col-form-label text-md-end text-start"><strong>Foto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $gerente->foto }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection
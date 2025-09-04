@extends('layouts.app')
@section('title', 'CRUD - Index geral')
@section('conteudo')
				<div class="margin d-flex flex-wrap justify-content-center gap-4 h-100 index cards-container">
                    <!-- Clientes -->
                    <div class="d-flex flex-column gap-4 col-md-3 col-12 mx-md-0 mx-auto">
                        <a href="{{ route('products.create') }}" class="text-decoration-none">
                            <div class="card cards">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <i class="fa-solid fa-cart-plus fa-5x mt-4 mb-4"></i>
                                    <h5 class="card-title">Novo Produto</h5>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('products.index') }}" class="text-decoration-none">
                            <div class="card cards">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <i class="fa-solid fa-cart-shopping fa-5x mt-4 mb-4"></i>
                                    <h5 class="card-title">Gerenciar Produtos</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Gerentes -->
                    <div class="d-flex flex-column gap-4 col-md-3 col-12 mx-md-0 mx-auto">
                        <a href="{{ route('gerentes.create') }}" class="text-decoration-none">
                            <div class="card cards">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <i class="fa-solid fa-user-plus fa-5x mt-4 mb-4"></i>
                                    <h5 class="card-title">Novo Gerente</h5>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('gerentes.index') }}" class="text-decoration-none">
                            <div class="card cards">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <i class="fa-solid fa-users fa-5x mt-4 mb-4"></i>
                                    <h5 class="card-title">Gerenciar Gerentes</h5>
                                </div>
                            </div>
                        </a>
                    </div>
				</div>
@endsection
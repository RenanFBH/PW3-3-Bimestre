@extends('layouts.app')
@section('title', 'CRUD - Index produtos')
@section('conteudo')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <h3 class="mt-3 text-center" style="background-color:#f9f6f4; padding:10px; border-radius:10px;">TABELA DE PRODUTOS</h3>
			<hr>
            <div class="card-body h-100">
                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Product</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Code</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post" class="d-flex justify-content-center gap">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm col-2 me-1 ms-1"><i class="bi bi-eye"></i> Show</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm col-2 me-1 ms-1"><i class="bi bi-pencil-square"></i> Edit</a>   
                                    <button type="submit" class="btn btn-danger btn-sm col-2 me-1 ms-1" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Product Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>
                  {{ $products->links() }}
            </div>
        </div>
    </div>    
</div>
    
@endsection
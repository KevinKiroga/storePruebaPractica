@extends('layout.masterpage')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Listado de productos</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            <h2>Buscar Producto</h2>
            <form action="{{ route('products.searchById') }}" method="GET">
                <div class="form-group">
                    <label for="product_id">ID del Producto:</label>
                    <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Ingrese el ID del Producto">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Buscar</button>
            </form>
        </div>

    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Descripción del producto</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
            @foreach ($products as $product)
            @if ($product->stock > 0)
            <tr>
                <td class="fw-bold">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td class="fw-bold">{{ $product->price }}</td>
                <td>
                    <span class="badge bg-warning fs-6">{{ $product->stock }}</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>
                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</div>
@endsection

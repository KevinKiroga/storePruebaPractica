@extends('layout.masterpage')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">Listado de ventas</h2>
            </div>

        </div>

        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
                    <th>ID</th>
                    <th>codigo de la venta</th>
                    <th>Id del cliente</th>
                    <th>Fecha de la venta</th>
                </tr>
                @foreach ($sales as $sale)
                    <tr>
                        <td class="fw-bold">{{ $sale->id}}</td>
                        <td>{{ $sale->total_sale }}</td>
                        <td>{{ $sale->name}}</td>
                        <td class="fw-bold">{{ $sale->date }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@extends('layout.template')

@section('content')
    <div class="grid grid-cols-12 m-8">
        <!-- Filtrar -->
        <div class="col-span-4">
            Filtros
        </div>
        <!-- Listar productos -->
        <div class="col-span-8">
            <div class="grid grid-cols-12 gap-4">
                @foreach ($products as $product)
                    @include('components.product', ['product' => $product])
                @endforeach
            </div>
        </div>
    </div>
@endsection
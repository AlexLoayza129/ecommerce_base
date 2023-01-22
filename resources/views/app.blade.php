@extends('layout.template')

@section('content')
<section class="w-full">
    <img src="https://www.pionier.pe/assets/upload/sliders/desktop-hello-summer-promo-1673893181.jpg" alt="Portada Pioner" class="w-full">
</section>
    <!-- Seccion de categorias -->
    @include('layout.categories.category-section')
    <!-- Seccion de descuentos -->
    @include('layout.offers.offer-section')
@endsection
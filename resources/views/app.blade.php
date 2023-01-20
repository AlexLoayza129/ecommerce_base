@extends('layout.template')

@section('content')
<section class="w-full pt-36">
    <img src="https://www.pionier.pe/assets/upload/sliders/desktop-hello-summer-promo-1673893181.jpg" alt="" class="w-full">
</section>
    <!-- Seccion de categorias -->
    @include('layout.categories.category-section')
    <!-- Seccion de descuentos -->
    @include('layout.offers.offer-section')
@endsection
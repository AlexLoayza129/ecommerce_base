@extends('layout.template')

@section('content')
    <!-- Slider -->
    @include('components.auto-slider')
    <!-- Seccion de categorias -->
    @include('layout.categories.category-section')
    <!-- Seccion de descuentos -->
    @include('layout.offers.offer-section')
@endsection
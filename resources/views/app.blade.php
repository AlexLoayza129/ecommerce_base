@extends('layout.template')

@section('content')
    <!-- Slider -->
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ URL('images/slides/home/home_slide_1.png')}}" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ URL('images/slides/home/home_slide_2.png')}}" class="w-full">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ URL('images/slides/home/home_slide_3.png')}}" class="w-full">
                    </li>
                </ul>
        </div>
    </section>
    <!-- Seccion de categorias -->
    @include('layout.categories.category-section')
    <!-- Seccion de descuentos -->
    @include('layout.offers.offer-section')
@endsection
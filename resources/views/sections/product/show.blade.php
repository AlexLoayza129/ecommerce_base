@extends('layout.template')

@section('content')
    <div class="grid grid-cols-12 gap-8 mx-16 my-8">
        <!-- Product images -->
        <div class="col-span-7">
            <div class="grid grid-cols-5">
                <!-- Another pics of product -->
                <div class="col-span-1 h-full">
                    <section class="splide mx-4">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <button type="button" class="splide__slide image">
                                    <img src="{{ URL($product->image_path) }}">
                                </button>
                                @if(empty($sub_images) == false)
                                @foreach ($sub_images as $sub_image)
                                    <button type="button" class="splide__slide image">
                                        <img src="{{ URL($sub_image->image_path) }}">
                                    </button>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </section>
                </div>
                <!-- Main card image -->
                <div class="col-span-4 rounded-md flex justify-center items-center">
                    <img id="main-img" src="{{ URL($product->image_path) }}" alt="">
                </div>
            </div>
        </div>
        <!-- Product info -->
        <div class="col-span-5">
            <p class="uppercase font-bold">{{ $product->name }}</p>
            <p class="font-light uppercase">SKU: {{ $product->id }}</p>
            <p class="font-semibold relative">
                Precio 
                <span class="absolute right-0" @if($product->isOffer == 1) style="text-decoration:line-through;" @endif>S/{{ $product->price }}</span>
            </p>
            <!-- Offer price final with discount -->
            @if($product->isOffer == 1)
                <p class="font-semibold relative">
                    Precio final 
                    <span class="absolute right-0">S/{{ $product->price - ($product->price * $offer->discount_percentage / 100) }}</span>
                </p>
            @endif
            <!-- If exists discount show the porcentage -->
            @if($product->isOffer == 1)
                <p class="relative my-2">
                    Descuento
                    <span class="font-semibold absolute right-[-1.2rem]">
                        <svg class="absolute right-4 w-12 h-12 fill-yellow-400" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 3C3.39922 3.5978 4.14539 4 5 4C5.85461 4 6.60078 3.5978 7 3C7.29941 2.4022 7.85904 2 8.5 2C9.14096 2 9.70059 2.4022 10 3C10.3992 3.5978 11.1454 4 12 4C12.8546 4 13.6008 3.5978 14 3C14.2994 2.4022 14.859 2 15.5 2C16.141 2 16.7006 2.4022 17 3C17.3992 3.5978 18.1454 4 19 4C19.8546 4 20.6008 3.5978 21 3V21C20.6008 20.4022 19.8546 20 19 20C18.1454 20 17.3992 20.4022 17 21C16.7006 21.5978 16.141 22 15.5 22C14.859 22 14.2994 21.5978 14 21C13.6008 20.4022 12.8546 20 12 20C11.1454 20 10.3992 20.4022 10 21C9.70059 21.5978 9.14096 22 8.5 22C7.85904 22 7.29941 21.5978 7 21C6.60078 20.4022 5.85461 20 5 20C4.14539 20 3.39922 20.4022 3 21V3Z" stroke="#facc15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="absolute right-6 top-3 text-sm text-white">{{ $offer->discount_percentage }}%</span>
                    </span>
                </p>
            @endif
        </div>
    </div>
    <script type="module">
        // Declaring this is a module for get jquery
        $(".image").click(function (e) {
            let img = e.target;
            let mainImage = $('#main-img');

            mainImage[0].src = img.src
        });
    </script>
@endsection
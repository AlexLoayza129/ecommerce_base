<a href="{{ route('product.show', $product->id) }}" class="col-span-4 p-4 rounded-md shadow-md">
    <img src="{{ URL($product->image_path) }}" alt="">
    <p class="text-sm text-center">{{ $product->name }}</p>
</a>
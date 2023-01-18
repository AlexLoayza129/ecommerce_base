<div class="grid grid-cols-12 gap-8 p-8">
    @foreach ($categories as $category)
        @include('components.category', ['category' => $category ])
    @endforeach
</div>
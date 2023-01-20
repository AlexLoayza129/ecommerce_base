<div class="grid grid-cols-12 gap-8 p-8">
    @foreach ($offers as $offer)
        @include('components.offer', ['offer' => $offer ])
    @endforeach
</div>

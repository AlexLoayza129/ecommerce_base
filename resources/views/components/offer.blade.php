<a href="#" class="transition-all ease-in-out duration-800 col-span-6 relative bg-gradient-to-r from-orange-300 to-yellow-300 rounded-md h-32 hover:from-yellow-300 hover:to-orange-300">
    <div class="w-full h-full flex items-center">
        <span class="text-6xl font-bold absolute left-4 text-white">%{{ $offer->discount_percentage }}</span>
        <span class="text-2xl font-bold absolute right-4 text-white">{{ $offer->product->name }}</span>
    </div>
</a>    
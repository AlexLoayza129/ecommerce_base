<div class="col-span-4 relative bg-gradient-to-r from-orange-400 to-orange-500 rounded-md py-4 hover:opacity-80 flex items-end justify-center cursor-pointer shadow-lg shadow-orange-300" style="min-height: 350px;">
    <img src="{{ URL($category->image_path)}}" class="absolute bottom-0 z-1" @if($category->id == 3) style="width: 70%;max-height:400px !important;width:90%;" @endif style="max-height:400px !important;width:90%;">
    <p class="text-white font-bold text-center text-4xl relative">{{ $category->name }}</p>
</div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <!-- component -->



    <div class="flex items-center justify-center p-12">
       
        <img src="{{ asset('/storage/' . $post->image)}}" alt="">
<div>
    {{ $post->content}}
</div>

    </div>

</x-app-layout>

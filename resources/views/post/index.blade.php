<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <!-- component -->
    <!-- This is an example component -->
    @foreach ($posts as $post)
        <!-- component -->
        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">
                    {{ $post->title }}</h1>

                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                    {{-- <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                        src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt=""> --}}

                    <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                        <p class="text-sm text-blue-500 uppercase">{{ $post->category->name }}</p>
                        <p class="text-sm text-blue-500 uppercase">
                            {{ $post->created_at->format('d M Y') }}
                        </p>

                        <a href="#"
                            class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                            {{ $post->user->name }}
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                            {{ Str::limit($post->content, 120) }}
                        </p>

                        <a href="{{ route('posts.show', $post)}}" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Voir plus</a>

                        <div class="flex items-center mt-6">
                            <img class="object-scale-down h-20 w-20"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
        </section>
    @endforeach


    </div>

</x-app-layout>

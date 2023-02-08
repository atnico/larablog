<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

    <!-- component -->



    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-100 max-w-[550px]">

            <div class="my-5">
                @foreach ($errors->all() as $error)
                    <span class="block text-red-500">{{ $error }}</span>
                @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-md-12 mx-auto">

                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data"
                            class="h-25 d-inline-block" style="width: 400px; bg-transparent">

                            @csrf

                            <div class="mb-5">
                                <label for="title"
                                    class="font-bold mb-3 block mt-6 text-base font-medium text-[#07074D]"
                                    value="Titre du post">
                                    Titre
                                </label>
                                <input type="string" name="title" id="title" placeholder="Titre"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="mb-5">
                                <label for="message" class="mb-3 mt-6 block text-base font-medium text-[#07074D]">
                                    Message
                                </label>
                                <textarea rows="4" name="content" id="content" placeholder="Votre message"
                                    class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            </div>

                            <div class="mb-5">
                                <label for="image" class="mb-3 mt-6 block text-base font-medium text-[#07074D]">
                                    Image
                                </label>
                                <input type="file" name="image" id="Image du post"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="mb-5">
                                <label for="category" class="mb-3 mt-6 block text-base font-medium text-[#07074D]"
                                    value="Categorie du post">
                                    Categorie
                                </label>
                                <select name="category" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>

                                <button type="button" class="btn btn-outline-primary text-light bg-primary">Créer mon
                                    post</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>

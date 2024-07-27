<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight px-10">
                {{ __('Edit Articles') }}
            </h2>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight px-10">
                <a href="{{ route('articles') }}">Back</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('articles.update', $articles->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <div>
                                <label for="" class="text-lg font-medium">Title</label>
                                <div class="mb-3">
                                    <input type="text" name="title" class="border-gray-300 shadow-sm w-1/2 rounded-md" placeholder="Enter title" value="{{ old('title', $articles->title) }}">
                                </div>
                                @error('title')
                                <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-lg font-medium">Author</label>
                                <div class="mb-3">
                                    <input type="text" name="author" class="border-gray-300 shadow-sm w-1/2 rounded-md" placeholder="Enter author name" value="{{ old('author', $articles->author) }}">
                                </div>
                                @error('author')
                                <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-lg font-medium">Article</label>
                                <div class="mb-3">
                                    <textarea name="article" class="border-gray-300 shadow-sm w-1/2 rounded-md" placeholder="Enter article">{{old('article', $articles->article)}}</textarea></textarea>
                                </div>
                                @error('article')
                                <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>

                            <button type="submit" class="bg-slate-700 text-white px-3 py-2 rounded-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

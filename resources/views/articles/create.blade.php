<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between mt-10 mb-5 mx-5">
                    <h2 class="font-semibold text-xl text-white leading-tight">
                        {{ __('Create Articles') }}
                    </h2>
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                        <a class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded duration-300" href="{{ route('articles') }}">Back</a>
                    </h2>
                </div>
                <div class="px-6 pb-6 text-gray-900">
                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf
                        <div class="text-white">
                            <div>
                                <label for="" class="text-md font-medium text-white">Title</label>
                                <div class="mb-3">
                                    <input type="text" name="title" class="bg-gray-800 border-none shadow-sm w-1/2 rounded-md" placeholder="Enter title" value="{{ old('title') }}">
                                </div>
                                @error('title')
                                <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-md font-medium text-white">Author</label>
                                <div class="mb-3">
                                    <input type="text" name="author" class="bg-gray-800 border-none shadow-sm w-1/2 rounded-md" placeholder="Enter author name" value="{{ old('author') }}">
                                </div>
                                @error('author')
                                <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-md font-medium text-white">Article</label>
                                <div class="mb-3">
                                    <textarea name="article" class="bg-gray-800 border-none shadow-sm w-1/2 rounded-md" placeholder="Enter article">{{old('article')}}</textarea></textarea>
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

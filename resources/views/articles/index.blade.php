<x-app-layout>
    @if (Session::has('success'))
        <div class="bg-green-200 border-green-600 p-4 mt-3 mx-16 rounded-sm shadow-sm">{{ Session::get('success') }}</div>
    @endif

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between my-5">
                        <h2 class="font-semibold text-xl text-white leading-tight">
                            {{ __('Articles') }}
                        </h2>
                        <h2 class="font-semibold text-md text-white leading-tight">
                            <a class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded duration-300" href="{{ route('articles.create') }}">Create</a>
                        </h2>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-sm font-bold bg-gray-800 text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-[25%]">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-[20%]">
                                        Author
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-[30%]">
                                        Articles
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-[25%]">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                <tr class="even:bg-gray-600 odd:bg-gray-700 text-white">
                                    <td class="px-6 py-4">
                                        {{ $article->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $article->author }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ Str::limit($article->article, 100) }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @can('edit articles')  
                                        <a class="bg-green-500 text-white px-3 py-2 rounded-md" href="{{ route('articles.edit', $article->id) }}">Edit</a>
                                        @endcan

                                        @can('delete articles')
                                        <a class="bg-red-700 text-white px-3 py-2 rounded-md" href="{{ route('articles.destroy', $article->id) }}">Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

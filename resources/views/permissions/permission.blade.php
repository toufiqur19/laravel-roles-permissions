<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight px-10">
                {{ __('Permission') }}
            </h2>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight px-10">
                <a href="{{ route('permission.create') }}">Create</a>
            </h2>
        </div>
    </x-slot>

    @if (Session::has('success'))
        <div class="bg-green-200 border-green-600 p-4 mt-3 mx-16 rounded-sm shadow-sm">{{ Session::get('success') }}</div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-sm font-bold text-gray-800 border-b border-gray-200 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-[15%]">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-[40%]">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-[25%]">
                                        Created
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-[25%]">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr class="bg-white border-b border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $permission->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $permission->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ Carbon\Carbon::parse($permission->created_at)->format('d-M-Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a class="bg-slate-700 text-white px-3 py-2 rounded-md" href="{{ route('permission.edit', $permission->id) }}">Edit</a>
                                        <a class="bg-red-700 text-white px-3 py-2 rounded-md" href="{{ route('permission.destroy', $permission->id) }}">Delete</a>
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

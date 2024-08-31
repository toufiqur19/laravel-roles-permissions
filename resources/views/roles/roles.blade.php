<x-app-layout>
    @if (Session::has('success'))
        <div class="bg-green-200 border-green-600 p-4 mt-3 mx-16 rounded-sm shadow-sm">{{ Session::get('success') }}</div>
    @endif

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between mx-5 my-5">
                        <h2 class="font-semibold text-2xl text-white leading-tight">
                            {{ __('Roles') }}
                        </h2>
                        <h2 class="font-semibold text-sm text-white leading-tight">
                            <a class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded duration-300" href="{{ route('roles.create') }}">Create</a>
                        </h2>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-sm font-bold bg-gray-800 text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-4 w-[5%]">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-[10%]">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-[35%]">
                                        Permission
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-[50%]">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border border-gray-800">
                                @foreach ($roles as $role)
                                <tr class="odd:bg-gray-900 even:bg-gray-800 text-white">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                                        {{ $role->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $role->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $role->permissions->pluck('name')->implode(', ') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @can('edit roles')                                          
                                        <a class="bg-slate-700 text-white px-3 py-2 rounded-md" href="{{ route('roles.edit', $role->id) }}">Add/Edit Role Permission</a>
                                        @endcan

                                        @can('delete roles')
                                        <a class="bg-red-700 text-white px-3 py-2 rounded-md" href="{{ route('roles.destroy', $role->id) }}">Delete</a>
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

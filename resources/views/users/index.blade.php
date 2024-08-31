<x-app-layout>

    @if (Session::has('success'))
        <div class="bg-green-200 border-green-600 p-4 mt-3 mx-16 rounded-sm shadow-sm">{{ Session::get('success') }}</div>
    @endif

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between py-3">
                        <h2 class="font-semibold text-xl text-white leading-tight">
                            {{ __('Users') }}
                        </h2>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-sm font-bold bg-gray-800 text-white rounded">
                                <tr>
                                    <th scope="col" class="px-6 py-4 w-[20%]">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-[25%]">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-[30%]">
                                        Role Permissions
                                    </th>
                                    <th scope="col" class="px-6 py-4 w-[25%]">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="odd:bg-gray-700 even:bg-gray-600 text-white">
                                    <td class="px-6 py-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $roleName)                               
                                            <label class="bg-gray-900 text-white px-3 py-2 rounded-md"> {{ $roleName }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        @can('edit users')
                                        <a class="bg-green-500 text-white px-3 py-2 rounded-md" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                        @endcan

                                        @can('delete users')
                                        <a class="bg-red-700 text-white px-3 py-2 rounded-md" href="{{ route('users.destroy', $user->id) }}">Delete</a>
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

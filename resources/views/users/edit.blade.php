<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight px-10">
                {{ __('Edit Users') }}
            </h2>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight px-10">
                <a href="{{ route('users') }}">Back</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('users.update',$users->id)}}" method="POST">
                        @csrf
                        <div>
                            <div>
                                <label for="" class="text-lg font-medium">Name</label>
                                <div class="mb-3">
                                    <input type="text" name="name" class="border-gray-300 shadow-sm w-1/2 rounded-md" placeholder="Enter Name" value="{{ old('name',$users->name) }}">
                                </div>
                                @error('name')
                                   <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>
                            <div>
                                <label for="" class="text-lg font-medium">Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="border-gray-300 shadow-sm w-1/2 rounded-md" placeholder="Enter Email" value="{{ old('email',$users->email) }}">
                                </div>
                                @error('email')
                                   <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>
                            <div class="grid grid-cols-4 mb-3">
                                @if ($roles->isNotEmpty())
                                    @foreach ($roles as $role)
                                        <div class="mt-3">
                                            
                                            <input type="checkbox" name="role[]" 
                                            {{($hasRoles->contains($role->id) ? 'checked' : '')}}
                                            id="{{ $role->id }}" class="rounded" 
                                            value="{{ $role->name }}" >
                                            <label for="{{ $role->id }}">{{ $role->name }}</label>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <button type="submit" class="bg-slate-700 text-white px-3 py-2 rounded-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

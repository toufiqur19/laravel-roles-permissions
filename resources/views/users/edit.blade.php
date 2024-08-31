<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between mx-5 mt-10">
                    <h2 class="font-semibold text-xl text-white leading-tight">
                        {{ __('Edit Users') }}
                    </h2>
                    <h2 class="font-semibold text-lg text-white leading-tight">
                        <a class="bg-green-500 text-white px-3 py-2 rounded-md font-sm" href="{{ route('users') }}">Back</a>
                    </h2>
                </div>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('users.update',$users->id)}}" method="POST">
                        @csrf
                        <div class="text-gray-400">
                            <div>
                                <label for="" class="text-lg font-medium">Name</label>
                                <div class="mb-3">
                                    <input type="text" name="name" class="bg-gray-800 shadow-sm w-1/2 rounded-md" placeholder="Enter Name" value="{{ old('name',$users->name) }}">
                                </div>
                                @error('name')
                                   <div class=" text-red-600 mb-3">{{ $message }}</div> 
                                @enderror
                            </div>
                            <div>
                                <label for="" class="text-lg font-medium">Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="bg-gray-800 shadow-sm w-1/2 rounded-md" placeholder="Enter Email" value="{{ old('email',$users->email) }}">
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

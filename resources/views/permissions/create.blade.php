<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between mx-5 mt-10">
                    <h2 class="font-semibold text-2xl text-white leading-tight">
                        {{ __('Create Permission') }}
                    </h2>
                    <h2 class="font-semibold text-sm text-white leading-tight">
                        <a class="bg-green-500 hover:bg-green-600 duration-300 text-white px-3 py-2 rounded-md" href="{{ route('permission') }}">Back</a>
                    </h2>
                </div>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('permission.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="" class="text-lg font-medium text-white">Name</label>
                            <div class="mb-3">
                                <input type="text" name="name" class="bg-gray-800 shadow-sm text-gray-400 w-1/2 rounded-md" placeholder="Enter Name">
                            </div>
                            @error('name')
                               <div class=" text-red-600 mb-3">{{ $message }}</div> 
                            @enderror

                            <button type="submit" class="bg-slate-700 text-white px-3 py-2 rounded-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

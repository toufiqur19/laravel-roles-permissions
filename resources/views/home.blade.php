<x-app-layout>
   <div class="py-5">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
           <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-white">
                <div class="flex justify-between">
                    <h2 class="font-semibold text-lg text-white leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </div>
                
                <div class="lg:flex lg:space-x-4 space-y-4 lg:space-y-0 text-center mt-8">
                    <div class="bg-gray-800 hover:bg-[#07ccec] duration-300 px-10 py-5 rounded cursor-pointer">
                        <h1>Permissions</h1>
                        {{ $permissions }}
                    </div>
                    <div class="bg-gray-800 hover:bg-[#07ccec] duration-300 px-10 py-5 rounded cursor-pointer">
                        <h1>Roles</h1>
                        {{ $roles }}
                    </div>
                    <div class="bg-gray-800 hover:bg-[#07ccec] duration-300 px-10 py-5 rounded cursor-pointer">
                        <h1>Users</h1>
                        {{ $users }}
                    </div>
                    <div class="bg-gray-800 hover:bg-[#07ccec] duration-300 px-10 py-5 rounded cursor-pointer">
                        <h1>Article</h1>
                        {{ $articles }}
                    </div>
                </div>

               </div>
           </div>
       </div>
   </div>
</x-app-layout>

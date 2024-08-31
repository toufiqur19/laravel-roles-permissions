<header class="bg-gray-900 lg:px-6 sticky top-0 px-7 flex justify-between items-center w-full h-16 z-50">
    <div class="logo">
        <a class="font-bold text-2xl whitespace-nowrap text-[#07ccec] hidden lg:block" href="{{ route('dashboard') }}"
        ><span class="text-green-500">Role</span>Permisson</a>
    </div>
    <div class="flex items-center space-x-3">
        <a class="font-bold text-2xl whitespace-nowrap text-[#07ccec] lg:hidden" href=""
        ><span class="text-green-500">Role</span>Permisson</a>
        <i id="bar" class="fa-solid fa-bars-staggered text-[#07ccec] text-xl lg:pl-56 cursor-pointer lg:hidden block"></i>
        <i id="time" class="fa-solid fa-xmark text-xl text-[#07ccec] lg:pl-56 cursor-pointer hidden lg:hidden"></i>
    </div>
    
    <nav>
        <div class="flex gap-5">
            @guest
               <ul class="text-white font-semibold flex space-x-3">
                    <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="{{ route('login') }}">Login</a></li>
                    <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="{{ route('register') }}">Register</a></li>
               </ul>
            @endguest

            @auth
            <div class="flex items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white">
                            <div>{{ Auth::user()->name }} ({{ Auth::user()->roles->pluck('name')->implode(' ') }})</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth
        </div>
    </nav>
</header>
{{-- <div>
    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
    </div>

    @can('view permission')
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('permission')" :active="request()->routeIs('permission')">
            {{ __('Permissions') }}
        </x-nav-link>
    </div>
    @endcan

    @can('view roles')
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('roles')" :active="request()->routeIs('roles')">
            {{ __('Roles') }}
        </x-nav-link>
    </div>
    @endcan

    @can('view users')
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
            {{ __('Users') }}
        </x-nav-link>
    </div>
    @endcan

    @can('view articles')
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('articles')" :active="request()->routeIs('articles')">
            {{ __('Articles') }}
        </x-nav-link>
    </div>
    @endcan

   <div class="flex float-end">
    @guest
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
            {{ __('Login') }}
        </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
            {{ __('Register') }}
        </x-nav-link>
    </div>
    @endguest
   </div>

</div> --}}

<!-- sidebar section start -->
<aside id="sideBar" class="lg:bg-tr bg-gray-900 h-[100vh] lg:w-[22%] w-full fixed lg:top-16 space-y-5 z-50 ml-[-100%] lg:ml-0 duration-700 text-center lg:text-start">
    {{-- <a class="font-bold text-2xl whitespace-nowrap text-[#07ccec] pl-6 hidden lg:block" href=""
      ><span class="text-green-500">Role</span>Permisson</a> --}}
    <div>
        <ul class="text-white font-semibold">
            <li class="pl-6 py-2 cursor-pointer hover:translate-x-1 duration-300 {{ Request::is('/')?'text-[#07ccec]':'' }}"><a href="{{ route('dashboard') }}">Dashboard</a></li>

            @can('view permission')
            <li class="{{ Request::is('permissions')?'text-[#07ccec]':'' }} pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="{{ route('permission') }}">Permission</a></li>
            @endcan

            @can('view roles')
            <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('roles')?'text-[#07ccec]':'' }}"><a href="{{ route('roles') }}">Roles</a></li>
            @endcan

            @can('view users')
            <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('users')?'text-[#07ccec]':'' }}"><a href="{{ route('users') }}">Users</a></li>
            @endcan

            @can('view articles')
            <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{Request::is('articles')?'text-[#07ccec]':''}}"><a href="{{ route('articles') }}">Articles</a></li>
            @endcan
        </ul>
    </div>
</aside>
<!-- sidebar section end -->

<script>
    //hamberger side menu start
let bar = document.querySelector('#bar');
let sideBar = document.querySelector('#sideBar');
let time = document.querySelector('#time');
bar.addEventListener('click', ()=>{
    sideBar.classList.toggle('ml-0');
    bar.classList.add('hidden');
    time.classList.remove('hidden');
})
time.addEventListener('click', ()=>{
    sideBar.classList.toggle('ml-0');
    time.classList.add('hidden');
    bar.classList.remove('hidden');
})
//hamberger side menu end
</script>
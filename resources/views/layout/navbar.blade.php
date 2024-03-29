<!-- ====== Start of Navbar ====== -->
<header
    x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 w-full bg-gray-100 flex item-center shadow-md dark:bg-slate-900 h-24">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr4- w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img
                        src="{{url('/images/galaxy_logo.png')}}"
                        alt="logo"
                        class="w-[48px] lg:w-[64px] inline-block dark:hidden"
                    />
                    <img
                        src="{{url('/images/galaxy_logo.png')}}"
                        alt="logo"
                        class="w-[48px] lg:w-[64px] hidden dark:inline-block"
                    />
                    <span class="text-xl xl:text-2xl font-bold  text-[#0c7187] dark:text-white">Jayden Fokkink</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                               x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolut right-0 top-full py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:right-4 lg:block lg:static lg:shadow-none"
                    >
                        <ul class="block lg:flex lg:items-center">
                            @foreach($navigationItems as $item)
                                <li>
                                    <a href="{{ $item['href'] }}"
                                       class="text-lg font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                        {{$item['label']}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ====== End of Navbar ====== -->

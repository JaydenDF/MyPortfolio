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
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolut right-0 top-full py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            @foreach($navigationItems as $item)
                                <li>
                                    <a href="{{ $item['href'] }}"
                                       class="text-lg font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                        {{$item['label']}}
                                    </a>
                                </li>
                            @endforeach
                            <li>
                                <div x-data="{dropdownOpen: false}" @click.outside="dropdownOpen = false" class="relative inline-block text-left">
                                    <button @click="dropdownOpen = !dropdownOpen" class="text-lg flex items-center rounded-[5px] px-1 text-base font-medium text-dark dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                        Projects
                                        <span class="pl-2">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                <path d="M10 14.25C9.8125 14.25 9.65625 14.1875 9.5 14.0625L2.3125 7C2.03125 6.71875 2.03125 6.28125 2.3125 6C2.59375 5.71875 3.03125 5.71875 3.3125 6L10 12.5312L16.6875 5.9375C16.9688 5.65625 17.4063 5.65625 17.6875 5.9375C17.9687 6.21875 17.9687 6.65625 17.6875 6.9375L10.5 14C10.3437 14.1563 10.1875 14.25 10 14.25Z"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <div :class="dropdownOpen ? 'top-full opacity-100 visible' : 'top-[110%] invisible opacity-0' " class="bg-primary shadow-1 w-auto min-w-auto p-6 ml-12 dark:shadow-box-dark absolute left-0 mt-2 rounded-md py-[10px] transition-all">
                                        @foreach($navigationProjects as $projects)
                                            <a href="{{ $projects['href'] }}"
                                               class="text-lg font-medium text-dark py-2 flex hover:text-orange2 dark:text-gray-200">
                                                {{$projects['label']}}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ====== End of Navbar ====== -->

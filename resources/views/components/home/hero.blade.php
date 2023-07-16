<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800" id="home">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1
                        class="text-orange3 dark:text-orange2 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
                    >
                        My name is Jayden.<br/>
                    </h1>
                    <p class="text-base mb-8 max-w-[520px]">
                        I am a CMGT student at Saxion, where my role is engineer, but really, its all about creating fun, interactive and emotional experiences, which is a fancy way of saying that I am a student in game development and one day will become a game developer. I love to learn new skills and see myself become better and better at it.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                My projects
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
                            Follow me on social media.
                            <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
                        </h6>
                        <x-layout.social-icons></x-layout.social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img
                            src="{{url('/images/me.png')}}"
                            alt="hero"
                            class="max-w-full lg:ml-auto"
                        />
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                          <svg
                              width="93"
                              height="93"
                              viewBox="0 0 93 93"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="2.5" cy="24.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="2.5" cy="46.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="2.5" cy="68.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="2.5" cy="90.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="24.5" cy="2.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="24.5" cy="24.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="24.5" cy="46.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="24.5" cy="68.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="24.5" cy="90.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="46.5" cy="2.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="46.5" cy="24.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="46.5" cy="46.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="46.5" cy="68.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="46.5" cy="90.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="68.5" cy="2.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="68.5" cy="24.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="68.5" cy="46.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="68.5" cy="68.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="68.5" cy="90.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="90.5" cy="2.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="90.5" cy="24.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="90.5" cy="46.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="90.5" cy="68.5" r="2.5" fill="#dc2a42"/>
                            <circle cx="90.5" cy="90.5" r="2.5" fill="#dc2a42"/>
                          </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

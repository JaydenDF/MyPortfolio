<x-app-layout class="prose">
    <section id="header">
        <div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800" id="home">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-5/12 px-4">
                        <div class="hero-content">
                            <h2 class="text-orange3 dark:text-orange2 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6"
                                id="header-title">
                            </h2>
                            <p class="text-base mb-8 max-w-[520px]" id="header-text">
                            </p>
                            <ul class="flex flex-wrap items-center">
                                <li id="header-github-link">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden lg:block lg:w-1/12 px-4"></div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="lg:text-right lg:ml-auto">
                            <div class="relative inline-block z-10 pt-11 lg:pt-0">
                            <span
                                class="max-w-full lg:ml-auto" id="header-image"
                            ></span>
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
    </section>

    <section class="pt-20 lg:pt-[120px] pb-6 lg:pb-[90px] overflow-hidden" id="about">
        <div class="container">
            <div class="flex flex-wrap justify-between items-center -mx-4">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex items-center -mx-3 sm:-mx-4">
                        <div class="w-full xl:w-1/2 px-3 sm:px-4">
                            <div class="py-3 sm:py-4">
                                <span id="about-image-3"/>
                            </div>
                            <div class="py-3 sm:py-4">
                                <span id="about-image-1"/>
                            </div>
                        </div>
                        <div class="w-full xl:w-1/2 px-3 sm:px-4">
                            <div class="my-4 relative z-10">
                                <span id="about-image-2"/>
                                <x-about-dots></x-about-dots>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                    <div class="mt-10 lg:mt-0">
                        <h2 class="font-bold text-3xl sm:text-4xl text-orange3 dark:text-orange2 mb-8" id="about-title"></h2>
                        <p class="text-base text-body-color mb-12" id="about-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font bg-white dark:bg-slate-800">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="font-bold text-3xl sm:text-4xl text-orange3 dark:text-orange2 mb-8" id="team-title"></h2>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-body-color" id="team-text"></p>
            </div>
            <span id="team-members">
            </span>
        </div>
    </section>
</x-app-layout>

<script>
    let content = {!! json_encode($content) !!};
    @env('local')
        console.log(content);
    @endenv
    let tempDiv = document.createElement('div');
    tempDiv.innerHTML = content;
    let elementsWithId = document.querySelectorAll('[id]');
    elementsWithId.forEach((element) => {
        let correspondingElement = tempDiv.querySelector('#' + element.id);
        if (correspondingElement) {
            element.innerHTML = correspondingElement.outerHTML;
        }
    });
</script>


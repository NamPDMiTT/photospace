<header>
    <nav class="bg-white shadow-md border-gray-200 dark:bg-gray-900 fixed w-full z-30 top-0">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center">
                <x-application-logo />
            </a>
            <div class="flex items-center lg:order-2">
                <button type="button" data-collapse-toggle="mega-menu" aria-controls="mega-menu" aria-expanded="false"
                    class="lg:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden lg:block">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <a href="{{ route('test') }}"
                    class="ml-4 text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:ring-violet-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-1 lg:mr-2 dark:bg-violet-600 dark:hover:bg-violet-700 focus:outline-none dark:focus:ring-violet-800">Login</a>
                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div id="mega-menu" class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                <div class="relative mt-3 lg:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 pl-3 pr-4 text-violet-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-violet-600 lg:p-0 dark:text-violet-500 lg:dark:hover:text-violet-500 dark:hover:bg-gray-700 dark:hover:text-violet-500 lg:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 lg:w-auto hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-violet-600 lg:p-0 dark:text-white lg:dark:hover:text-violet-500 dark:hover:bg-gray-700 dark:hover:text-violet-500 lg:dark:hover:bg-transparent dark:border-gray-700">
                            Company <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-dropdown"
                            class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-lg dark:border-gray-700 lg:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 lg:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 lg:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-violet-600 dark:hover:text-violet-500">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-violet-600 lg:p-0 dark:text-white lg:dark:hover:text-violet-500 dark:hover:bg-gray-700 dark:hover:text-violet-500 lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-violet-600 lg:p-0 dark:text-white lg:dark:hover:text-violet-500 dark:hover:bg-gray-700 dark:hover:text-violet-500 lg:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-violet-600 lg:p-0 dark:text-white lg:dark:hover:text-violet-500 dark:hover:bg-gray-700 dark:hover:text-violet-500 lg:dark:hover:bg-transparent dark:border-gray-700">Community</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-violet-600 lg:p-0 dark:text-white lg:dark:hover:text-violet-500 dark:hover:bg-gray-700 dark:hover:text-violet-500 lg:dark:hover:bg-transparent dark:border-gray-700">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex gap-2 max-w-screen-xl mx-auto mt-20">
        <a href="{{ route('home') }}" class="ml-4 hover:text-violet-600 hover:underline">Home</a>
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-[16px]">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
        </svg>
        <a href="" class="hover:text-violet-600 hover:underline">Convert</a>
    </div>
</header>

<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 lg:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center mb-4 sm:mb-0">
                <x-application-logo />
            </a>
            <ul
                class="flex flex-wrap items-center mb-6 text-sm font-medium text-violet-500 sm:mb-0 dark:text-violet-400">
                <li>
                    <a href="{{ route('home') }}" class="mr-4 hover:underline lg:mr-6 ">Home</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline lg:mr-6">Features</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline lg:mr-6 ">Pricing</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline lg:mr-6">Community</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Support</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="{{ route('home') }}"
                class="hover:underline">Photo Space™</a>. We love our
            users!</span>
    </div>
</footer>

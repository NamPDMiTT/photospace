<x-app-layout>
    <div class="text-center my-3 space-y-3">
        <h1 class="text-5xl">File Converter</h1>
        <p class="text-2xl">Convert yout file in seconds without losing its quality</p>
        <div class="flex justify-center gap-3">
            <button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <h2>Convert: JPG</h2>
                </span>
            </button>
            <button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <h2>To: WEBP</h2>
                </span>
            </button>
        </div>
    </div>
    <div class="flex items-center justify-center w-3/4 m-auto">
        @yield('content')
    </div>
    <div class="space-y-8">
        <div class="text-center w-3/4 m-auto">
            <h1 class="text-4xl font-medium mt-12 mb-6">How to convert <span class="text-purple-700">JPG</span> to
                <span class="text-purple-700">WEBP</span> in 4 steps
            </h1>
            <p class="text-xl text-slate-600">Our online JPG to WEBP converter tool allows you to change photo
                formats in just a few clicks, and it can even convert images in batches for minimal hassle.
                Choose from over a hundred conversion options to have your image just as you want it.</p>
        </div>
        <div class="grid grid-cols-4 gap-6 w-4/5 m-auto">
            <div class="shadow-gray-400 shadow-lg rounded-lg">
                <div class="rounded-lg rounded-b-none bg-gradient-to-br from-rose-100 to-rose-50 p-6">
                    <button class="text-black bg-rose-300 font-medium rounded-lg text-sm px-4 py-2.5">
                        Step 1
                    </button>
                    <img src="{{ asset('images/step1-graphic.png') }}" alt="" class="w-full h-44 my-6">
                </div>
                <div class="px-4 pt-6 pb-12">
                    <p class="font-semibold text-gray-700">
                        Upload your JPG file(s) by clicking the "Choose Files"
                        button or dragging the image(s) in the dotted area.
                    </p>
                </div>
            </div>
            <div class="shadow-gray-400 shadow-lg rounded-lg">
                <div class="rounded-lg rounded-b-none bg-gradient-to-br from-yellow-100 to-yellow-50 p-6">
                    <button class="text-black bg-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5">
                        Step 2
                    </button>
                    <img src="{{ asset('images/step2-graphic.png') }}" alt="" class="w-full h-44 my-6">
                </div>
                <div class="px-4 pt-6 pb-12">
                    <p class="font-semibold text-gray-700">
                        Once the files are uploaded, click "Start Conversion"
                        on the right to convert all the files.
                    </p>
                </div>
            </div>
            <div class="shadow-gray-400 shadow-lg rounded-lg">
                <div class="rounded-lg rounded-b-none bg-gradient-to-br from-green-100 to-green-50 p-6">
                    <button class="text-black bg-green-300 font-medium rounded-lg text-sm px-4 py-2.5">
                        Step 3
                    </button>
                    <img src="{{ asset('images/step3-graphic.png') }}" alt="" class="w-full h-44 my-6">
                </div>
                <div class="px-4 pt-6 pb-12">
                    <p class="font-semibold text-gray-700">
                        Once the conversion is done, you can download the files by clicking "Download All"
                        or "Download WEBP" next to each file.
                    </p>
                </div>
            </div>
            <div class="shadow-gray-400 shadow-lg rounded-lg">
                <div class="rounded-lg rounded-b-none bg-gradient-to-br from-fuchsia-100 to-fuchsia-50 p-6">
                    <button class="text-black bg-fuchsia-300 font-medium rounded-lg text-sm px-4 py-2.5">
                        Step 4
                    </button>
                    <img src="{{ asset('images/step4-graphic.png') }}" alt="" class="w-full h-44 my-6">
                </div>
                <div class="px-4 pt-6 pb-12">
                    <p class="font-semibold text-gray-700">
                        Lastly, edit your converted images using our photo editing toolkit to crop, resize,
                        remove background, add captions & much more.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-20">
        <div class="bg-green-200 py-16">
            <div class="flex gap-32 w-4/5 mx-auto">
                <img src="{{ asset('images/toolkit2-graphic.png') }}" alt="" class="w-[500px]">
                <div class="">
                    <h2 class="text-5xl font-medium mt-8 mb-6 text-right">Fast & Easy JPG to WEBP Converter
                    </h2>
                    <div class="text-xl space-y-4 text-right">
                        <p>With Pixelied, you can convert JPG to WEBP within seconds, even if you are working on
                            large-sized files. Even better, you do not need any experience using image converter
                            tools.
                            It is as easy as choosing your file and clicking a couple of buttons.
                        </p>
                        <p>It is highly intuitive, easy to use, and virtually anybody can navigate it with
                            confidence
                            and get the most out of it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-red-200 py-16">
            <div class="flex gap-32 w-4/5 mx-auto">
                <div class="">
                    <h2 class="text-5xl font-medium mt-8 mb-6 text-left">Batch Convert JPG to WEBP Images
                    </h2>
                    <div class="text-xl space-y-4 text-left">
                        <p>Working with many files can be pretty challenging, especially if you need to turn JPG
                            to WEBP one by one. But with Pixelied, you can finish your projects faster!
                        </p>
                        <p>It allows you to convert your images all in one go with its batch convert feature.
                            You can convert your pictures simultaneously without fuss with just a button click.
                        </p>
                    </div>
                </div>
                <img src="{{ asset('images/toolkit3-graphic.png') }}" alt="" class="w-[500px]">
            </div>
        </div>
    </div>
</x-app-layout>

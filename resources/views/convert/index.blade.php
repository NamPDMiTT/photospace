@extends('convert.home')
@section('content')
    <div class="container mx-auto max-w-screen-lg h-full">
        <!-- file upload modal -->
        <article aria-label="File Upload Modal" class="relative h-full flex flex-col rounded-md" ondrop="dropHandler(event);"
            ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
            <form action="{{ route('convert-image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- overlay -->
                <div id="overlay"
                    class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                    <i>
                        <svg class="fill-current w-12 h-12 mb-3 text-purple-700" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                        </svg>
                    </i>
                    <p class="text-lg text-purple-700">Drop files to upload</p>
                </div>
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{{ session('error') }}</span>
                    </div>
                @endif
                <!-- scroll area -->
                <section class="overflow-auto p-8 w-full h-full flex flex-col">
                    <label for="hidden-input"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-purple-400 border-dashed rounded-lg cursor-pointer bg-purple-50 dark:hover:bg-bray-800 dark:bg-purple-700 hover:bg-purple-100 dark:border-purple-600 dark:hover:border-purple-500 dark:hover:bg-purple-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-purple-500 dark:text-purple-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-purple-500 dark:text-purple-400">
                                <span class="font-semibold">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-purple-500 dark:text-purple-400">JPG or JPEG images</p>
                        </div>
                        <input id="hidden-input" type="file" name="images[]" accept=".jpg, .jpeg" multiple
                            class="hidden" />
                        <button id="button"
                            class="hidden mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                            Upload a file
                        </button>
                    </label>
                    <div class="flex gap-4 mt-6 mb-4">
                        <div id="settingsBtn" class="flex gap-1 mt-2 mb-2 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-gray-800 dark:text-gray-400"
                                viewBox="0 0 30 32" fill="none">
                                <path
                                    d="M11.7537 5.69745C11.864 5.01299 12.4398 4.51038 13.1136 4.51038H16.2903C16.9641 4.51038 17.5399 5.01299 17.6502 5.69745L17.9111 7.31515C17.9883 7.78746 18.2946 8.18147 18.7013 8.41383C18.792 8.46434 18.8814 8.51864 18.9709 8.57421C19.3678 8.82173 19.8529 8.89876 20.2879 8.7308L21.7788 8.15495C22.0844 8.0365 22.4208 8.03369 22.7281 8.147C23.0355 8.26032 23.2939 8.48242 23.4572 8.77374L25.045 11.6114C25.208 11.9027 25.2654 12.2442 25.2071 12.5751C25.1488 12.906 24.9785 13.2049 24.7265 13.4185L23.4977 14.4629C23.1387 14.7659 22.9611 15.237 22.9696 15.7156C22.9716 15.8229 22.9716 15.9303 22.9696 16.0376C22.9611 16.515 23.1387 16.9848 23.4964 17.2878L24.7277 18.3335C25.2471 18.7755 25.3819 19.5382 25.0462 20.1393L23.456 22.977C23.2929 23.2682 23.0348 23.4904 22.7277 23.6039C22.4206 23.7175 22.0844 23.715 21.7788 23.597L20.2879 23.0212C19.8529 22.8532 19.369 22.9302 18.9696 23.1777C18.8808 23.2334 18.791 23.2873 18.7001 23.3394C18.2946 23.5705 17.9883 23.9645 17.9111 24.4368L17.6502 26.0532C17.5399 26.739 16.9641 27.2416 16.2903 27.2416H13.1124C12.4385 27.2416 11.8627 26.739 11.7525 26.0545L11.4915 24.4368C11.4156 23.9645 11.1093 23.5705 10.7026 23.3381C10.6117 23.2865 10.5219 23.233 10.433 23.1777C10.0349 22.9302 9.55095 22.8532 9.1148 23.0212L7.62384 23.597C7.31845 23.7151 6.98233 23.7178 6.67523 23.6044C6.36814 23.4911 6.10998 23.2693 5.94665 22.9782L4.35768 20.1406C4.19467 19.8493 4.13722 19.5078 4.19554 19.1768C4.25387 18.8459 4.42419 18.5471 4.67621 18.3335L5.90623 17.2891C6.26396 16.986 6.4416 16.515 6.43303 16.0364C6.43111 15.929 6.43111 15.8217 6.43303 15.7143C6.4416 15.237 6.26396 14.7672 5.90623 14.4641L4.67621 13.4185C4.4245 13.2049 4.25437 12.9063 4.19605 12.5757C4.13774 12.2451 4.195 11.9038 4.35768 11.6126L5.94665 8.775C6.10982 8.48346 6.36811 8.2611 6.67549 8.14754C6.98287 8.03398 7.31938 8.03661 7.62506 8.15495L9.1148 8.7308C9.55095 8.89876 10.0349 8.82173 10.433 8.57421C10.5212 8.51864 10.6119 8.46434 10.7026 8.41257C11.1093 8.18147 11.4156 7.78746 11.4915 7.31515L11.7537 5.69745Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.3767 15.8759C18.3767 16.8807 17.9895 17.8443 17.3002 18.5548C16.611 19.2653 15.6761 19.6645 14.7013 19.6645C13.7266 19.6645 12.7917 19.2653 12.1025 18.5548C11.4132 17.8443 11.026 16.8807 11.026 15.8759C11.026 14.8712 11.4132 13.9075 12.1025 13.197C12.7917 12.4865 13.7266 12.0874 14.7013 12.0874C15.6761 12.0874 16.611 12.4865 17.3002 13.197C17.9895 13.9075 18.3767 14.8712 18.3767 15.8759Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-lg font-medium text-gray-800">Settings</span>
                        </div>
                        <div id="displayRange" class="border pt-2 px-3 rounded shadow-md hidden">
                            <div class="flex items-center">
                                <span class="text-md font-medium text-gray-800">Quality</span>
                                <input id="quality" type="range" name="image_quality" min="0" max="100"
                                    step="1" value="85" class="mx-3" />
                                <output id="value"></output>%
                            </div>
                        </div>
                    </div>

                    <ul id="gallery"
                        class="flex flex-1 flex-wrap -m-1 min-w-full px-4 sm:px-6 md:px-0 overflow-hidden lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-slate-500/[0.16] dark:scrollbar-thumb:!bg-slate-500/50 max-h-96 lg:supports-scrollbars:pr-2 lg:max-h-96">
                        <li id="empty" class="h-full w-full text-center flex flex-col justify-center items-center">
                            <img class="mx-auto w-32"
                                src="{{ asset('images/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png') }}"
                                alt="no data" />
                            <span class="text-small text-gray-500">No files selected</span>
                        </li>
                    </ul>
                </section>

                <!-- sticky footer -->
                <footer class="flex justify-end px-8 pb-8 pt-4">
                    <button type="submit" id="submit"
                        class="rounded-md px-4 py-2 bg-purple-700 hover:bg-purple-500 text-white focus:shadow-outline focus:outline-none">
                        Convert now
                    </button>
                    <button id="cancel" type="reset"
                        class="cursor-pointer ml-3 rounded-md px-4 py-2 bg-red-700 hover:bg-red-500 text-white focus:shadow-outline focus:outline-none">
                        Cancel
                    </button>
                </footer>
            </form>
        </article>

        <!-- using two similar templates for simplicity in js code -->
        <template id="file-template">
            <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-auto">
                <article tabindex="0"
                    class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                    <img alt="upload preview"
                        class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed truncate" />
                    <section
                        class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                        <h1 class="flex-1 group-hover:text-purple-800"></h1>
                        <div class="flex">
                            <span class="p-1 text-purple-800">
                                <i>
                                    <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                    </svg>
                                </i>
                            </span>
                            <p class="p-1 size text-xs text-gray-700"></p>
                            <button
                                class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path class="pointer-events-none"
                                        d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                </svg>
                            </button>
                        </div>
                    </section>
                </article>
            </li>
        </template>

        <template id="image-template">
            <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-auto">
                <article tabindex="0"
                    class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                    <img alt="upload preview"
                        class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed truncate" />
                    <section
                        class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                        <h1 class="flex-1"></h1>
                        <div class="flex">
                            <span class="p-1">
                                <i>
                                    <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                    </svg>
                                </i>
                            </span>

                            <p class="p-1 size text-xs"></p>
                            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path class="pointer-events-none"
                                        d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                </svg>
                            </button>
                        </div>
                    </section>
                </article>
            </li>
        </template>

        {{-- <div class="flex items-center justify-center mt-5 mb-5 ">
            <button type="button"
                class="relative inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-auto mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="sr-only">Notifications</span>
                DOWLOAD ALL
                <div
                    class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-purple-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
                    0</div>
            </button>
        </div> --}}

        @if (session('convertedImages'))
            <div id="convertedRange" class="border-2 rounded-lg border-purple-400 pt-10 px-10 pb-24 space-y-6">
                @foreach (session('convertedImages') as $image)
                    <div class="flex justify-between convertedImage">
                        <div class="flex gap-4 items-center">
                            <div class="w-20 rounded ring-2 ring-gray-300 p-1">
                                <img class="w-auto h-auto" src="{{ asset($image['path']) }}" alt="Large avatar">
                            </div>
                            <div class="">
                                <span class="font-medium">{{ $image['name'] }}</span>
                                <h1 class="flex-1 font-medium"></h1>
                                <div class="flex gap-2">
                                    <p class="text-[#209A3B]">Converted</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-1" viewBox="0 0 22 20"
                                        fill="none">
                                        <path
                                            d="M7.5472 10.75L9.93402 13L13.912 7.75M20.2769 10C20.2769 11.1819 20.0299 12.3522 19.5501 13.4442C19.0703 14.5361 18.3671 15.5282 17.4805 16.364C16.594 17.1997 15.5415 17.8626 14.3832 18.3149C13.2249 18.7672 11.9834 19 10.7296 19C9.47586 19 8.23437 18.7672 7.07605 18.3149C5.91772 17.8626 4.86524 17.1997 3.9787 16.364C3.09215 15.5282 2.38891 14.5361 1.90911 13.4442C1.42932 12.3522 1.18237 11.1819 1.18237 10C1.18237 7.61305 2.18824 5.32387 3.9787 3.63604C5.76915 1.94821 8.19753 1 10.7296 1C13.2617 1 15.6901 1.94821 17.4805 3.63604C19.271 5.32387 20.2769 7.61305 20.2769 10Z"
                                            stroke="#209A3B" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-8 items-center">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 removeImage" viewBox="0 0 36 36"
                                    fill="none">
                                    <path
                                        d="M22.11 13.5L21.591 27.0001M14.409 27.0001L13.89 13.5M28.842 8.68505C29.355 8.76305 29.865 8.84555 30.375 8.93405M28.842 8.68505L27.24 29.5095C27.1746 30.3574 26.7916 31.1493 26.1675 31.7269C25.5435 32.3045 24.7244 32.6253 23.874 32.625H12.126C11.2756 32.6253 10.4565 32.3045 9.83247 31.7269C9.2084 31.1493 8.82538 30.3574 8.76 29.5095L7.158 8.68505M28.842 8.68505C27.1108 8.42332 25.3706 8.22469 23.625 8.08955M7.158 8.68505C6.645 8.76155 6.135 8.84405 5.625 8.93255M7.158 8.68505C8.8892 8.42333 10.6294 8.2247 12.375 8.08955M23.625 8.08955V6.71555C23.625 4.94555 22.26 3.46955 20.49 3.41405C18.8304 3.36101 17.1696 3.36101 15.51 3.41405C13.74 3.46955 12.375 4.94705 12.375 6.71555V8.08955M23.625 8.08955C19.8806 7.80017 16.1194 7.80017 12.375 8.08955"
                                        stroke="#FF0000" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <a href="{{ asset($image['path']) }}"
                                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                                download>Download</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

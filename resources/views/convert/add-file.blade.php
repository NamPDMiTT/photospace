@extends('convert.home')
@section('content')
    <label for="dropzone-file"
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
        <input id="dropzone-file" type="file" class="hidden" />
    </label>

    <div class="hidden">
        <button id="settingsBtn" class="flex gap-1 py-2 px-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-gray-800 dark:text-gray-400" viewBox="0 0 30 32"
                fill="none">
                <path
                    d="M11.7537 5.69745C11.864 5.01299 12.4398 4.51038 13.1136 4.51038H16.2903C16.9641 4.51038 17.5399 5.01299 17.6502 5.69745L17.9111 7.31515C17.9883 7.78746 18.2946 8.18147 18.7013 8.41383C18.792 8.46434 18.8814 8.51864 18.9709 8.57421C19.3678 8.82173 19.8529 8.89876 20.2879 8.7308L21.7788 8.15495C22.0844 8.0365 22.4208 8.03369 22.7281 8.147C23.0355 8.26032 23.2939 8.48242 23.4572 8.77374L25.045 11.6114C25.208 11.9027 25.2654 12.2442 25.2071 12.5751C25.1488 12.906 24.9785 13.2049 24.7265 13.4185L23.4977 14.4629C23.1387 14.7659 22.9611 15.237 22.9696 15.7156C22.9716 15.8229 22.9716 15.9303 22.9696 16.0376C22.9611 16.515 23.1387 16.9848 23.4964 17.2878L24.7277 18.3335C25.2471 18.7755 25.3819 19.5382 25.0462 20.1393L23.456 22.977C23.2929 23.2682 23.0348 23.4904 22.7277 23.6039C22.4206 23.7175 22.0844 23.715 21.7788 23.597L20.2879 23.0212C19.8529 22.8532 19.369 22.9302 18.9696 23.1777C18.8808 23.2334 18.791 23.2873 18.7001 23.3394C18.2946 23.5705 17.9883 23.9645 17.9111 24.4368L17.6502 26.0532C17.5399 26.739 16.9641 27.2416 16.2903 27.2416H13.1124C12.4385 27.2416 11.8627 26.739 11.7525 26.0545L11.4915 24.4368C11.4156 23.9645 11.1093 23.5705 10.7026 23.3381C10.6117 23.2865 10.5219 23.233 10.433 23.1777C10.0349 22.9302 9.55095 22.8532 9.1148 23.0212L7.62384 23.597C7.31845 23.7151 6.98233 23.7178 6.67523 23.6044C6.36814 23.4911 6.10998 23.2693 5.94665 22.9782L4.35768 20.1406C4.19467 19.8493 4.13722 19.5078 4.19554 19.1768C4.25387 18.8459 4.42419 18.5471 4.67621 18.3335L5.90623 17.2891C6.26396 16.986 6.4416 16.515 6.43303 16.0364C6.43111 15.929 6.43111 15.8217 6.43303 15.7143C6.4416 15.237 6.26396 14.7672 5.90623 14.4641L4.67621 13.4185C4.4245 13.2049 4.25437 12.9063 4.19605 12.5757C4.13774 12.2451 4.195 11.9038 4.35768 11.6126L5.94665 8.775C6.10982 8.48346 6.36811 8.2611 6.67549 8.14754C6.98287 8.03398 7.31938 8.03661 7.62506 8.15495L9.1148 8.7308C9.55095 8.89876 10.0349 8.82173 10.433 8.57421C10.5212 8.51864 10.6119 8.46434 10.7026 8.41257C11.1093 8.18147 11.4156 7.78746 11.4915 7.31515L11.7537 5.69745Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M18.3767 15.8759C18.3767 16.8807 17.9895 17.8443 17.3002 18.5548C16.611 19.2653 15.6761 19.6645 14.7013 19.6645C13.7266 19.6645 12.7917 19.2653 12.1025 18.5548C11.4132 17.8443 11.026 16.8807 11.026 15.8759C11.026 14.8712 11.4132 13.9075 12.1025 13.197C12.7917 12.4865 13.7266 12.0874 14.7013 12.0874C15.6761 12.0874 16.611 12.4865 17.3002 13.197C17.9895 13.9075 18.3767 14.8712 18.3767 15.8759Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-lg font-medium text-gray-800">Settings</span>
        </button>
        <div id="displayRange" class="border py-2 px-3 ml-2 rounded shadow-md hidden">
            <div class="flex items-center">
                <span class="text-md font-medium text-gray-800">Quality</span>
                <input id="quality" type="range" min="0" max="100" step="1" value="85"
                    class="mx-3" />
                <output id="value"></output>%
            </div>
        </div>
    </div>
@endsection

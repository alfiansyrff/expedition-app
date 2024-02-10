<aside class="z-30 hidden w-64 overflow-y-auto bg-gray-25 dark:bg-gray-800 md:block flex-shrink-0 shadow-xl">
    <div x-data="{ active: localStorage.getItem('active') || 'dashboard' }" x-init="if (('active' in localStorage)) {
        active = localStorage.getItem('active');
    }
    $watch('active', value => localStorage.setItem('active', value))"
        class="h-full py-4 dark:bg-gray-800 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-2xl font-bold text-gray-800 dark:text-white" href="#">
            ABCD EKSPEDISI
        </a>
        <ul class="mt-4">
            <div>
                <div class="py-1 flex items-center space-x-4 font-medium dark:bg-gray-800">
                    <div class="flex-1 border-t border-gray-700 dark:border-gray-200"></div>
                    <div class="text-black text-sm dark:text-white">DASHBOARD</div>
                    <div class="flex-1 border-t border-gray-700 dark:border-gray-200"></div>
                </div>
            </div>
            <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true" x-show="active === 'dashboard.admin'"></span>
                <a @click="active = 'dashboard.admin'; localStorage.setItem('active', 'dashboard.admin');"
                    href="{{ route('dashboard') }}"
                    class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                        viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path class="dark:fill-white"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c.2 35.5-28.5 64.3-64 64.3H128.1c-35.3 0-64-28.7-64-64V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L416 100.7V64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V185l52.8 46.4c8 7 12 15 11 24zM248 192c-13.3 0-24 10.7-24 24v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V216c0-13.3-10.7-24-24-24H248z" />
                    </svg>
                    <span class="ml-4 dark:text-white">BERANDA</span>
                </a>
            </li>
            <div>
                <div class="py-1 flex items-center space-x-4 font-medium dark:bg-gray-800">
                    <div class="flex-1 border-t border-gray-700 dark:border-gray-200"></div>
                    <div class="text-black text-sm dark:text-white">FITUR UTAMA</div>
                    <div class="flex-1 border-t border-gray-700 dark:border-gray-200"></div>
                </div>
            </div>
            @role('admin')
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'pengiriman'"></span>
                    <a @click="active = 'pengiriman'; localStorage.setItem('active', 'pengiriman');"
                        href="{{ route('pengiriman') }}"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">PENGIRIMAN</span>
                    </a>
                </li>
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'agen'"></span>
                    <a @click="active = 'agen'; localStorage.setItem('active', 'agen');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">AGEN</span>
                    </a>
                </li>
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'agen_baru'"></span>
                    <a @click="active = 'agen_baru'; localStorage.setItem('active', 'agen_baru');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">AGEN BARU</span>
                    </a>
                </li>
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'kota'"></span>
                    <a @click="active = 'kota'; localStorage.setItem('active', 'kota');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">KOTA</span>
                    </a>
                </li>
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'kota_baru'"></span>
                    <a @click="active = 'kota_baru'; localStorage.setItem('active', 'kota_baru');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">KOTA BARU</span>
                    </a>
                </li>
            @endrole
            @role('agent')
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'riwayat_kirim'"></span>
                    <a @click="active = 'riwayat_kirim'; localStorage.setItem('active', 'riwayat_kirim');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">RIWAYAT KIRIM</span>
                    </a>
                </li>
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'kota'"></span>
                    <a @click="active = 'kota'; localStorage.setItem('active', 'kota');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">KOTA</span>
                    </a>
                </li>
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'kota_baru'"></span>
                    <a @click="active = 'kota_baru'; localStorage.setItem('active', 'kota_baru');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="ml-4 dark:text-white">KOTA BARU</span>
                    </a>
                </li>
            @endrole
            @role('user')
                <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true" x-show="active === 'kirim_baru'"></span>
                    <a href="{{ route('create.pengiriman') }}" @click="active = 'kirim_baru'; localStorage.setItem('active', 'kirim_baru');"
                        class="inline-flex px-6 py-3 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="bold dark:fill-white"
                                d="M176 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h16V98.4C92.3 113.8 16 200 16 304c0 114.9 93.1 208 208 208s208-93.1 208-208c0-41.8-12.3-80.7-33.5-113.2l24.1-24.1c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L355.7 143c-28.1-23-62.2-38.8-99.7-44.6V64h16c17.7 0 32-14.3 32-32s-14.3-32-32-32H224 176zm72 192V320c0 13.3-10.7 24-24 24s-24-10.7-24-24V192c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                        </svg>
                        <span class="ml-4 dark:text-white">KIRIM BARU</span>
                    </a>
                </li>
                <li x-init="if (('isPagesMenuOpen2' in localStorage)) {
                    isPagesMenuOpen2 = localStorage.getItem('isPagesMenuOpen2');
                }
                $watch('isPagesMenuOpen2', value => localStorage.setItem('isPagesMenuOpen2', value)" @click="active = 'faq'; localStorage.setItem('active', 'faq');"
                    class="relative px-6 py-3 dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200"
                        @click="togglePagesMenu2">
                        <span
                            class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                            x-show="active === 'faq'"></span>
                        <span class="inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path class="bold dark:fill-white"
                                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                            </svg>
                            <span class="ml-4 dark:text-white">PROMO</span>
                        </span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <template x-if="isPagesMenuOpen2">
                        <ul x-data="{ listActive2: localStorage.getItem('listActive2') || 'categories' }" x-init="if (('listActive2' in localStorage)) {
                            listActive2 = localStorage.getItem('listActive2');
                        }
                        $watch('listActive2', value => localStorage.setItem('listActive2', value))"
                            x-transition:enter="transition-all ease-in-out duration-800"
                            x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-800"
                            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 px-0 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li
                                class="relative transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                <span
                                    class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                                    aria-hidden="true" x-show="listActive2 === 'categories'"></span>
                                <a @click="listActive2 = 'categories'; localStorage.setItem('listActive2', 'categories');"
                                    class="flex-row inline-flex py-1 px-2 pr-1 items-center gap-1 w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                                        viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path class="bold dark:fill-white"
                                            d="M384 480h48c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224H144c-11.4 0-21.9 6-27.6 15.9L48 357.1V96c0-8.8 7.2-16 16-16H181.5c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8H416c8.8 0 16 7.2 16 16v32h48V160c0-35.3-28.7-64-64-64H298.5c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H87.7 384z" />
                                    </svg>
                                    <p>
                                        DISKON %
                                    </p>
                                </a>
                                <span
                                    class="absolute inset-y-0 right-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tl-lg rounded-bl-lg"
                                    aria-hidden="true" x-show="listActive2 === 'categories'"></span>
                            </li>
                            <li
                                class="relative transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                <span
                                    class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                                    aria-hidden="true" x-show="listActive2 === 'articles'"></span>
                                <a @click="listActive2 = 'articles'; localStorage.setItem('listActive2', 'articles');"
                                    class="flex-row inline-flex py-1 px-2 pr-1 items-center gap-1 w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path class="bold dark:fill-white"
                                            d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" />
                                    </svg>
                                    <p>
                                        VOUCHER
                                    </p>
                                </a>
                                <span
                                    class="absolute inset-y-0 right-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tl-lg rounded-bl-lg"
                                    aria-hidden="true" x-show="listActive2 === 'articles'"></span>
                            </li>
                        @endrole
                    </ul>
                </template>
            </li>
            <div class="ada">
                <div class="py-1 flex items-center space-x-4 font-medium dark:bg-gray-800">
                    <div class="flex-1 border-t border-gray-700 dark:border-gray-200"></div>
                    <div class="text-black text-sm dark:text-white">AKUN</div>
                    <div class="flex-1 border-t border-gray-700 dark:border-gray-200"></div>
                </div>
            </div>
            <!-- <li class="relative dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true" x-show="active === 'profil'"></span>
                <a @click="active = 'profil'; localStorage.setItem('active', 'profil');"
                    class="inline-flex px-6 py-0 items-center w-full text-sm font-semibold transition-colors duration-150 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" class="group-hover:h-5"
                        viewBox="0 0 448 512"><
                        <path class="bold dark:fill-white"
                            d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                    </svg>
                    <span class="ml-4 dark:text-white">PROFIL</span>
                </a>
            </li> -->
            <li class="relative px-6 py-0 dark:bg-gray-800 dark:hover:bg-gray-700 group hover:bg-white">
                <span class="absolute inset-y-0 left-0 w-1 bg-kuning-300 dark:bg-blue-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true" x-show="active === 'keluar'"></span>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 "
                        @click.prevent="$root.submit(); active = 'keluar'; togglePagesMenu; localStorage.removeItem('active');"
                        aria-haspopup="true">
                        <span class="absolute inset-y-0 left-0 w-1 bg-blue2 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true" x-show="active === 'keluar'"></span>
                        <span class="inline-flex items-center">
                            <div class="sidebar-link flex-row">
                                <span
                                    @click.prevent="$root.submit(); active = 'keluar'; togglePagesMenu; localStorage.removeItem('active');"class="flex-row inline-flex items-center gap-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em"
                                        class="group-hover:h-5 mr-3"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path class="dark:fill-white"
                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                    </svg>
                                    <span class="dark:text-white hide-menu text-base text-blue2">Keluar</span>
                                </span>
                            </div>
                        </span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

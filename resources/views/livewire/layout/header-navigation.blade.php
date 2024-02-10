<?php

use Livewire\Volt\Component;

new class extends Component {
    public function logout()
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login');
    }
}; ?>
<header x-data="{ open: false }" class="z-10 bg-gray-25 shadow-md dark:bg-gray-800">
    <div
        class="py-3 flex items-center justify-between dark:bg-gray-800 md:justify-end h-full px-6 text-blue-600 dark:text-blue-300">
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-blue"
            @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="#FDE047" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <ul class="flex justify-end items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <button class="rounded-md focus:outline-none focus:shadow-outline-blue" @click="toggleTheme"
                    aria-label="Toggle color mode">
                    <template x-if="!dark">
                        <svg class="w-5 h-5" aria-hidden="true" fill="#FDE047" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                            </path>
                        </svg>
                    </template>
                    <template x-if="dark">
                        <svg class="w-5 h-5" aria-hidden="true" fill="#FDE047" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </template>
                </button>
            </li>
            <!-- Notifications menu -->
            <li x-data="data()" class="relative">
                <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-blue"
                    @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications"
                    aria-haspopup="true">
                    <svg class="w-5 h-5" aria-hidden="true" fill="#FDE047" viewBox="0 0 20 20">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                    <!-- Notification badge -->
                    <span aria-hidden="true"
                        class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
                </button>
                <div x-show="isNotificationsMenuOpen" style="display: none;">
                    <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu"
                        @keydown.escape="closeNotificationsMenu"
                        class="absolute z-10 right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
                        <li class="flex">
                            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                href="#">
                                <span>Messages</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                    13
                                </span>
                            </a>
                        </li>
                        <li class="flex">
                            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                href="#">
                                <span>Sales</span>
                                <span
                                    class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                                    2
                                </span>
                            </a>
                        </li>
                        <li class="flex">
                            <a class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                href="#">
                                <span>Alerts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Settings Dropdown -->
            <li class="hidden sm:flex sm:items-center sm:ml-6 dark:bg-gray-800">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="w-full inline-flex items-center text-sm leading-4 font-medium rounded-md text-gray-500 bg-gray-25 dark:bg-gray-800 dark:text-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="inline-flex m-0 p-0 flex-1 dark:bg-gray-800">
                                <div class="dark:bg-gray-800" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name"
                                    x-on:profile-updated.window="name = $event.detail.name"></div>

                                <div class="ml-1 dark:bg-gray-800">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout; localStorage.removeItem('active'); console.log('berhasil');"
                            class="w-full text-left">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </li>

            <!-- Hamburger -->
            <li class="flex items-center sm:hidden p-0 mt-1">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center rounded-md text-gray-400 focus:outline-none  transition duration-150 ease-in-out">
                    <svg class="h-6 w-6 text-blue-200 opacity-100" stroke="currentColor" fill="none"
                        viewBox="0 0 24 24">
                        <svg :class="{ 'hidden': open, 'inline-flex': open }" xmlns="http://www.w3.org/2000/svg"
                            height="1.25em"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path class="fill-kuning-300"
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }"
                            class="hidden dark:stroke-kuning-300 stroke-black" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }"
        class="absolute z-10 top-14 bg-white w-full left-0 hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 dark:bg-gray-800">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-white" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name"
                    x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500 dark:text-white">{{ auth()->user()->email }}
                </div>
            </div>

            <div class="mt-3 space-y-1 dark:text-white">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout; localStorage.removeItem('active'); console.log('berhasil');"
                    class="w-full text-left dark:text-white">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</header>

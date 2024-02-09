<div x-data="{ show_edit_confirm: false, idModal: '' }" x-show="show_edit_confirm"
    x-on:open-modal-edit.window="show_edit_confirm = true; idModal = $event.detail.idModal;"
    x-on:close-modal-edit.window="show_edit_confirm = false" x-on:keydown.escape.window="show_edit_confirm = false"
    x-transition.duration.400ms id="popup-modal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    style="display: none;">
    <div
        class="bg-kuning-50 dark:bg-yellow-200 relative items-center justify-center sm:w-full w-10/12 max-w-md max-h-full inset-y-1/4 ml-[7%] sm:ml-[17%] md:ml-[40%]">
        <div class="relative bg-kuning-50 dark:bg-yellow-200 rounded-lg shadow">
            <button x-on:click="$dispatch('close-modal-edit')" type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                data-modal-hide="popup-modal">
                <svg class="w-3 h-3 active:text-black active:w-4 active:h-4" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="rgb(31 41 55)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Tutup Modal</span>
            </button>
            <div class="p-6 text-center">
                <svg class="mx-auto mb-3 text-gray-400 w-14 h-14" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="rgb(31 41 55)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                {{ $tanya }}
                {{ $setuju }}
                {{ $cancel }}
            </div>
        </div>
    </div>
</div>

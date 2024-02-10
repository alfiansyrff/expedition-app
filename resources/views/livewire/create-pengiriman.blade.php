@can('add-pengiriman')
    <div class="p-4 bg-gray-100 dark:bg-gray-600 flex w-full h-screen flex-col">
        <div
            class="my-2 mb-3 p-2 px-3 rounded-lg w-fit bg-gray-100 dark:bg-slate-700 border-1  border-kuning-300 shadow dark:border-blue-800">
            <div class="py-2">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Tambah Pengiriman</h1>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">Form Tambah Pengiriman ABCD Ekspedisi</p>
            </div>
        </div>

        <div
            class="relative py-3 px-3 rounded-lg w-full bg-gray-100 dark:bg-slate-700 border-1 border-kuning-300 shadow dark:border-blue-800">
            <div class="flex py-2 w-full bg-gray-100 dark:bg-slate-700 mx-auto flex-col items-center rounded-xl">
                <div class="flex flex-col w-full md:px-6">
                    <h3 class="mb-4 text-xl text-center text-blue-900 font-bold dark:text-white">Form Pengiriman</h3>
                    <form wire:submit="tambahPengiriman" class="flex flex-col space-y-5" action="">
                        <div class="space-y-4 flex flex-col bg-gray-100 dark:bg-slate-700">
                            <div>
                                <label for="subjek"
                                    class="block mb-2 font-medium text-blue-900 dark:text-white">Subjek</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input wire:model="subjek" type="text" id="subjek"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-kuning-100 focus:border-kuning-50 block w-full ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Subjek Pengiriman ..." required>
                                </div>
                                @error('subjek')
                                    <div class="bg-red-100 border-1 border-red-400 text-red-700 py-1 px-4 text-xs rounded-lg"
                                        role="alert">
                                        <span class="">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="nama_pengirim" class="block mb-2 font-medium text-blue-900 dark:text-white">Nama
                                    Pengirim</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input wire:model="nama_pengirim" type="text" id="nama_pengirim"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-kuning-100 focus:border-kuning-50 block w-full ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nama Pengirim ..." required>
                                </div>
                                @error('nama_pengirim')
                                    <div class="bg-red-100 border-1 border-red-400 text-red-700 py-1 px-4 text-xs rounded-lg"
                                        role="alert">
                                        <span class="">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="alamat_pengirim"
                                    class="block mb-2 font-medium text-blue-900 dark:text-white">Alamat
                                    Pengirim</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input wire:model="alamat_pengirim" type="text" id="alamat_pengirim"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-kuning-100 focus:border-kuning-50 block w-full ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Alamat Pengirim ..." required>
                                </div>
                                @error('alamat_pengirim')
                                    <div class="bg-red-100 border-1 border-red-400 text-red-700 py-1 px-4 text-xs rounded-lg"
                                        role="alert">
                                        <span class="">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="nama_penerima" class="block mb-2 font-medium text-blue-900 dark:text-white">Nama
                                    Penerima</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input wire:model="nama_penerima" type="text" id="nama_penerima"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-kuning-100 focus:border-kuning-50 block w-full ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nama Penerima ..." required>
                                </div>
                                @error('nama_penerima')
                                    <div class="bg-red-100 border-1 border-red-400 text-red-700 py-1 px-4 text-xs rounded-lg"
                                        role="alert">
                                        <span class="">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="alamat_penerima"
                                    class="block mb-2 font-medium text-blue-900 dark:text-white">Alamat
                                    Penerima</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input wire:model="alamat_penerima" type="text" id="alamat_penerima"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-kuning-100 focus:border-kuning-50 block w-full ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Alamat Penerima ..." required>
                                </div>
                                @error('alamat_penerima')
                                    <div class="bg-red-100 border-1 border-red-400 text-red-700 py-1 px-4 text-xs rounded-lg"
                                        role="alert">
                                        <span class="">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="berat" class="block mb-2 font-medium text-blue-900 dark:text-white">Berat
                                    (Kg) Pengiriman</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input wire:model="berat" type="number" id="berat"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-kuning-100 focus:border-kuning-50 block w-full ps-10 p-2.5  dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Berat Pengiriman ..." required>
                                </div>
                                @error('berat')
                                    <div class="bg-red-100 border-1 border-red-400 text-red-700 py-1 px-4 text-xs rounded-lg"
                                        role="alert">
                                        <span class="">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="button" x-on:click="$dispatch('create-pengiriman-show')"
                            class="w-full md:w-80 mx-auto mt-2 self-center text-black hover:text-gray-700 bg-yellow-300 dark:bg-blue-500 dark:hover:bg-blue-700 hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white">Tambah
                            Pengiriman</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- CREATE MODAL --}}
        <x-modals.new-modal>
            <x-slot name="tanya">
                <div>
                    <h3 class="mb-4 text-base sm:text-lg font-normal text-gray-800">Tambah Pengiriman
                        Baru?</h3>
                </div>
            </x-slot>
            <x-slot name="setuju">
                <button wire:click="tambahPengiriman" data-modal-hide="popup-modal" type="button"
                    class="text-white bg-yellow-400 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-700 font-medium rounded-lg text-xs sm:text-sm inline-flex items-center px-3 sm:px-5 py-2.5 text-center mr-2">
                    Ya, Tambah
                </button>
            </x-slot>
            <x-slot name="cancel">
                <button x-on:click="$dispatch('close-modal-new')" data-modal-hide="popup-modal" type="button"
                    class="text-gray-500 bg-white hover:bg-slate-400 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-xs sm:text-sm font-medium px-3 sm:px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak</button>
            </x-slot>
        </x-modals.new-modal>
    </div>
@endcan


{{-- SWEET ALERT --}}
<script>
    window.addEventListener('alert', (alert) => {
        Swal.fire({
            title: alert.detail[0].title,
            text: alert.detail[0].text,
            icon: alert.detail[0].icon,
            confirmButtonText: alert.detail[0].confirmButtonText,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('pengiriman') }}";
            } else if (result.dismiss === Swal.DismissReason.backdrop) {
                window.location.href = "{{ route('pengiriman') }}";
            } else if (result.dismiss === Swal.DismissReason.esc) {
                window.location.href = "{{ route('pengiriman') }}";
            }
        });
    })
</script>

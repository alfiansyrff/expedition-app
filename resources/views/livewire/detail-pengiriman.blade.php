@can('read-pengiriman')
    <div x-data="{ resi: @entangle('resi') }" class="p-4 bg-gray-100 dark:bg-gray-600 flex w-full h-screen flex-col">
        <div
            class="my-2 mb-2 p-2 px-3 rounded-lg w-fit justify-center mx-auto bg-gray-100 dark:bg-slate-700 border-1 border-kuning-300 shadow dark:border-blue-800">
            <div class="py-2">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Detail Pengiriman #<span x-text="resi"></span>
                </h1>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">Halaman Detail Pengiriman Resi #<span
                        x-text="resi"></span> ABCD Ekspedisi</p>
            </div>
        </div>

        <div class="flex md:flex-row justify-center">
            <div
                class="my-2 mb-3 py-2 px-3 rounded-lg flex basis-1/2 bg-gray-100 dark:bg-slate-700 bg-opacity-50 border-1 border-kuning-300 shadow dark:border-blue-800">
                <div class="flex w-full mx-auto flex-col rounded-xl px-2">
                    <h3 class="mb-1 text-xl text-center text-gray-900 dark:text-gray-100 font-bold">Detail #<span
                            x-text="resi"></span>
                    </h3>

                    <div class="flex flex-col space-y-2.5">
                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class="text-sm font-semibold text-gray-600 dark:text-gray-200">Subjek</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->subjek }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Nama Pengirim</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->nama_pengirim }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Alamat
                                    Pengirim</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->alamat_pengirim }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Nama Penerima</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->nama_penerima }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Nama Penerima</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->alamat_penerima }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Berat</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="number" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->berat }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Status</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ $pengiriman->status }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Tanggal
                                    Dibuat</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nama SLA ..."
                                        value="{{ \Carbon\Carbon::parse($pengiriman->created_at)->isoFormat('LLLL') . ' WIB' }}">
                                </div>
                                </p>
                            </div>
                        </div>

                        <div class="inline-flex justify-around w-full">
                            <div class="flex flex-col items-left w-full">
                                <label class=" text-sm font-semibold text-gray-600 dark:text-gray-200">Terakhir
                                    Diperbarui</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class="fa-solid fa-font w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                                    </div>
                                    <input readonly type="text" id="nama_sla"
                                        class="min-w-fit bg-gray-100 border-1 border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  ps-10 py-1 px-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Nama SLA ..."
                                        value="{{ \Carbon\Carbon::parse($pengiriman->updated_at)->isoFormat('LLLL') . ' WIB' }}">
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endcan

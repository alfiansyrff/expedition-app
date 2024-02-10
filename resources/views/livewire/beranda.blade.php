<div class="p-4 dark:bg-gray-600 flex w-full h-screen flex-col">
    <div
        class="my-2 mb-3 p-2 px-3 rounded-lg w-fit dark:bg-gray-700 border-1 border-kuning-300 dark:border-blue-800 shadow shadow-blue-500">
        <div class="py-2">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Data Pengiriman</h1>
            @role('admin')
                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">Daftar Pengiriman ABCD Ekspedisi - ADMIN</p>
            @endrole
            @role('agent')
                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">Daftar Pengiriman ABCD Ekspedisi - AGENT</p>
            @endrole
            @role('user')
                <p class="text-sm font-medium text-gray-500 dark:text-gray-300">Daftar Transaksi Pengiriman</p>
            @endrole
        </div>
    </div>

    <style>
        div#pengiriman-table_wrapper {
            width: 100%;
        }

        /* Dark Mode */
        table.table.dataTable thead tr {
            background-color: #047DBB;
            color: black;
        }

        div.dark table.table.dataTable thead tr {
            background-color: #047DBB;
            color: black;
        }

        table.table.dataTable thead tr th {
            background-color: #047DBB;
            color: black;
            font-size: 1em;
            font-weight: 800;
            padding-top: 0.8em !important;
            padding-bottom: 0.8em !important;
        }

        div.dark table.table.dataTable thead tr th {
            background-color: #047DBB;
            color: black;
            font-size: 1em;
            font-weight: 800;
            padding-top: 0.8em !important;
            padding-bottom: 0.8em !important;
        }

        table.table.dataTable tbody tr.even td {
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }

        div.dark table.table.dataTable tbody tr.even td {
            color: white;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
            background-color: #6b7280;
        }

        table.table.dataTable tbody tr.odd td {
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }

        div.dark table.table.dataTable tbody tr.odd td {
            padding-top: 0.5em;
            color: white;
            background-color: #8d94a1;
            padding-bottom: 0.5em;
        }

        div.dark ul.pagination li.paginate_button {
            background-color: white;
        }

        div.dark ul.pagination li.paginate_button a {
            color: white;
            background-color: #1f2937;
        }

        div.dark ul.pagination li.paginate_button a:hover {
            color: white;
            background-color: #6b7280;
            scale: 1.1;
        }

        div.dark div#pengiriman-table_length label {
            color: white;
        }

        div.dark div#pengiriman-table_filter label {
            color: white;
        }

        div.dark div.dt-buttons.btn-group.flex-wrap button.btn.btn-secondary span {
            color: white;
        }

        div.dark div.dt-buttons.btn-group.flex-wrap button.btn.btn-secondary span i {
            color: white;
        }

        div.dark div.dataTables_info {
            color: white;
        }

        /* Sampai Sini */

        div#pengiriman-table_wrapper>div.row:first-child {
            margin-bottom: 0 !important;
            padding-bottom: 0 !important;
        }

        div#pengiriman-table_wrapper>div.row {}

        div#pengiriman-table_wrapper>div.row:last-child {}

        div#pengiriman-table_wrapper>div.row:first-child div.col-sm-12.mb-4 {
            margin-bottom: 0.5em !important;
        }

        div#pengiriman-table_wrapper>div.row:first-child div.col-sm-12.mb-4 div {
            margin: 0;
            padding: 0;
            margin-bottom: 0;
        }

        div#pengiriman-table_length {
            display: flex;
            justify-content: flex-between;
            align-items: center;
            justify-items: center;
        }

        div#pengiriman-table_length label {
            display: flex;
            justify-content: flex-between;
            align-items: center;
            gap: 0.3em;
            font-size: 1em;
            font-weight: 500;
            text-align: center;
            color: black;
        }

        div#pengiriman-table_length label select {
            height: 1.5em;
            font-size: 1em;
            margin: 0;
            padding: 0;
            padding-left: 0.35em;
            background-position: right 0.3em center;
            text-align: start;
            width: 3em;
        }

        div#pengiriman-table_length label select option {
            font-size: 1em;
        }

        div#pengiriman-table_filter {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            justify-items: center;
        }

        div#pengiriman-table_filter label {
            display: flex;
            justify-content: flex-between;
            align-items: center;
            gap: 0.3em;
            font-size: 1em;
            font-weight: 500;
            text-align: center;
            color: black;
        }

        div#pengiriman-table_filter label input {
            height: 1em;
            font-size: 0.9em;
            margin: 0;
            padding: 0;
            padding-left: 0.5em;
            padding-right: 0.5em;
        }

        ul.pagination {}

        ul.pagination li.paginate_button {
            background-color: #B7D7FC;
        }

        ul.pagination li.paginate_button a {
            color: black;
            background-color: #B7D7FC;
        }

        ul.pagination li.paginate_button a:hover {
            color: white;
            background-color: #0d6efd;
            scale: 1.1;
        }


        @media only screen and (max-width: 768px) {
            div#pengiriman-table_wrapper div.row div.col-sm-12.col-md-6 {
                display: flex;
                flex-direction: column !important;
                justify-content: center;
                align-items: center;
                gap: 1em !important;
            }

            div#pengiriman-table_wrapper div.row div.col-sm-12.col-md-6:first-child {
                margin-bottom: 0.4em !important;
            }
        }
    </style>

    <div wire:ignore
        class="relative py-3 px-3 rounded-lg w-full dark:bg-gray-700 border-1 border-kuning-300 dark:border-blue-800 shadow">
        @role('admin')
            <h3
                class="md:absolute md:mb-2 md:inset-y-3 md:inset-x-1/3 text-gray-500 dark:text-gray-100 font-semibold text-center text-2xl">
                Tabel Pengiriman</h3>
        @endrole
        @role('agent')
            <h3
                class="mb-8 md:mb-2 md:inset-y-3 md:inset-x-1/3 text-gray-500 dark:text-gray-100 font-semibold text-center text-2xl">
                Tabel Pengiriman</h3>
        @endrole
        @role('user')
            <h3
                class="mb-8 md:mb-2 md:inset-y-3 md:inset-x-1/3 text-gray-500 dark:text-gray-100 font-semibold text-center text-2xl">
                Tabel Pengiriman</h3>
        @endrole
        <div class="overflow-x-scroll p-0">
            <table class="flex-1 table table-bordered w-full" style="width: 100%" id="pengiriman-table">
                <thead>
                    <tr>
                        <!-- <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                            ID</th> -->
                        <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                            No Resi
                        </th>
                        <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                            Subjek</th>
                        <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                            Berat</th>
                        <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                            Waktu Dibuat</th>
                        @role('user')
                            <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                                Aktif Terakhir</th>
                        @endrole
                        <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                            Status</th>
                        <th class="py-1 px-2 text-uppercase text-white bg-blue-700 text-sm font-bold text-center">
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    {{-- DELETE MODAL --}}
    <x-modals.delete-modal>
        <x-slot name="tanya">
            <div x-data="{ resi: @entangle('resi') }">
                <h3 x-show="resi != null" class="mb-4 text-base sm:text-lg font-normal text-gray-800">Hapus Data
                    Pengiriman dengan Resi <span x-text="resi"></span>?</h3>
            </div>
        </x-slot>
        <x-slot name="setuju">
            <button wire:click="deletePengiriman" data-modal-hide="popup-modal" type="button"
                class="text-white bg-rose-500 hover:bg-rose-700 focus:ring-4 focus:outline-none focus:ring-rose font-medium rounded-lg text-xs sm:text-sm inline-flex items-center px-3 sm:px-5 py-2.5 text-center mr-2">
                Ya, Hapus
            </button>
        </x-slot>
        <x-slot name="cancel">
            <button x-on:click="$dispatch('close-modal-delete')" data-modal-hide="popup-modal" type="button"
                class="text-gray-500 bg-white hover:bg-slate-400 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-xs sm:text-sm font-medium px-3 sm:px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak</button>
        </x-slot>
    </x-modals.delete-modal>

    {{-- KIRIM MODAL --}}
    <x-modals.kirim-modal>
        <x-slot name="tanya">
            <div x-data="{ resi: @entangle('resi') }">
                <h3 x-show="resi != null" class="mb-4 text-base sm:text-lg font-normal text-gray-800">Kirim
                    Pengiriman dengan Resi <span x-text="resi"></span>?</h3>
            </div>
        </x-slot>
        <x-slot name="setuju">
            <button wire:click="kirimPengiriman" data-modal-hide="popup-modal" type="button"
                class="text-white bg-green-300 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-700 font-medium rounded-lg text-xs sm:text-sm inline-flex items-center px-3 sm:px-5 py-2.5 text-center mr-2">
                Ya, Kirim
            </button>
        </x-slot>
        <x-slot name="cancel">
            <button x-on:click="$dispatch('close-modal-kirim')" data-modal-hide="popup-modal" type="button"
                class="text-gray-500 bg-white hover:bg-slate-400 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-xs sm:text-sm font-medium px-3 sm:px-5 py-2.5 hover:text-gray-900 focus:z-10">Tidak</button>
        </x-slot>
    </x-modals.kirim-modal>
</div>

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

{{-- DATA TABLE --}}
@role('admin')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#pengiriman-table');
            var title = "Manajemen Pengiriman";
            var columns = [];
            var dataColumns = [
                /* {
                    data: 'id',
                    name: 'id',
                    searchable: false
                }, */
                {
                    data: 'nomor_resi',
                    name: 'nomor_resi'
                },
                {
                    data: 'subjek',
                    name: 'subjek'
                },
                {
                    data: 'berat',
                    name: 'berat'
                },
                {
                    data: 'waktu_dibuat',
                    name: 'waktu_dibuat'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ];
            makeDataTable(table, title, columns, dataColumns);
        });


        function makeDataTable(table, title, columnArray, dataColumns) {

            $(table).DataTable({
                processing: true,
                serverSide: true,
                pageLength: 15,
                buttons: [{
                        extend: "excel",
                        text: '<i class="fa-regular fa-file-excel mr-1"></i> Excel',
                        className: "py-1 px-2 bg-gray-100 dark:bg-slate-700 hover:bg-kuning-300 dark:hover:bg-blue-700 border-kuning-200 hover:border-kuning-500 dark:border-blue-400 dark:hover:border-blue-500 focus:ring-kuning-100 dark:focus:ring-blue-300 text-black border-lg font-bold",
                        title: title,
                        exportOptions: {
                            columns: columnArray
                        }
                    },
                    {
                        extend: "csv",
                        text: '<i class="fa-solid fa-file-csv mr-1"></i> CSV',
                        className: "py-1 px-2 bg-gray-100 dark:bg-slate-700 hover:bg-kuning-300 dark:hover:bg-blue-700 border-kuning-200 hover:border-kuning-500 dark:border-blue-400 dark:hover:border-blue-500 focus:ring-kuning-100 dark:focus:ring-blue-300 text-black border-b font-bold",
                        title: title,
                        exportOptions: {
                            columns: columnArray
                        }
                    }, {
                        extend: "print",
                        text: '<i class="fa-solid fa-print mr-1"></i> Print',
                        className: "py-1 px-2 bg-gray-100 dark:bg-slate-700 hover:bg-kuning-300 dark:hover:bg-blue-700 border-kuning-200 hover:border-kuning-500 dark:border-blue-400 dark:hover:border-blue-500 focus:ring-kuning-100 dark:focus:ring-blue-300 text-black border-b font-bold",
                        title: title,
                        exportOptions: {
                            columns: columnArray
                        }
                    }
                ],
                ajax: @json(route('pengiriman.ajax')),
                columns: dataColumns,
                order: [
                    [0, "asc"]
                ],
                language: {
                    emptyTable: "Tidak ada data yang tersedia pada tabel ini",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
                    infoFiltered: "(disaring dari _MAX_ entri keseluruhan)",
                    infoThousands: "'",
                    lengthMenu: "Tampilkan _MENU_ entri",
                    loadingRecords: "Sedang memuat...",
                    processing: "Sedang memproses...",
                    search: "Cari:",
                    zeroRecords: "Tidak ditemukan data yang sesuai",
                    thousands: "'",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya",
                    },
                    aria: {
                        sortAscending: ": aktifkan untuk mengurutkan kolom ke atas",
                        sortDescending: ": aktifkan untuk mengurutkan kolom menurun",
                    },
                    autoFill: {
                        cancel: "Batalkan",
                        fill: "Isi semua sel dengan <i>%d</i>",
                        fillHorizontal: "Isi sel secara horizontal",
                        fillVertical: "Isi sel secara vertikal",
                    },
                    buttons: {
                        collection: "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'/>",
                        colvis: "Visibilitas Kolom",
                        colvisRestore: "Kembalikan visibilitas",
                        copy: "Salin",
                        copyKeys: "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br><br>To membatalkan, klik pesan ini atau tekan esc.",
                        copySuccess: {
                            1: "1 baris disalin ke papan klip",
                            _: "%d baris disalin ke papan klip",
                        },
                        copyTitle: "Salin ke Papan klip",
                        csv: "CSV",
                        excel: "Excel",
                        pageLength: {
                            1: "Tampilkan 1 baris",
                            "-1": "Tampilkan semua baris",
                            _: "Tampilkan %d baris",
                        },
                        pdf: "PDF",
                        print: "Cetak",
                    },
                },
            });
        }
    </script>
@endrole

@role('agent')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#pengiriman-table');
            var title = "Manajemen Pengiriman";
            var columns = [];
            var dataColumns = [
                /* {
                        data: 'id',
                        name: 'id',
                        searchable: false
                    }, */
                {
                    data: 'nomor_resi',
                    name: 'nomor_resi'
                },
                {
                    data: 'subjek',
                    name: 'subjek'
                },
                {
                    data: 'berat',
                    name: 'berat'
                },
                {
                    data: 'waktu_dibuat',
                    name: 'waktu_dibuat'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ];
            makeDataTable(table, title, columns, dataColumns);
        });


        function makeDataTable(table, title, columnArray, dataColumns) {

            $(table).DataTable({
                processing: true,
                serverSide: true,
                pageLength: 15,
                buttons: [],
                ajax: @json(route('pengiriman.ajax')),
                columns: dataColumns,
                order: [
                    [0, "asc"]
                ],
                language: {
                    emptyTable: "Tidak ada data yang tersedia pada tabel ini",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
                    infoFiltered: "(disaring dari _MAX_ entri keseluruhan)",
                    infoThousands: "'",
                    lengthMenu: "Tampilkan _MENU_ entri",
                    loadingRecords: "Sedang memuat...",
                    processing: "Sedang memproses...",
                    search: "Cari:",
                    zeroRecords: "Tidak ditemukan data yang sesuai",
                    thousands: "'",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya",
                    },
                    aria: {
                        sortAscending: ": aktifkan untuk mengurutkan kolom ke atas",
                        sortDescending: ": aktifkan untuk mengurutkan kolom menurun",
                    },
                    autoFill: {
                        cancel: "Batalkan",
                        fill: "Isi semua sel dengan <i>%d</i>",
                        fillHorizontal: "Isi sel secara horizontal",
                        fillVertical: "Isi sel secara vertikal",
                    },
                    buttons: {
                        collection: "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'/>",
                        colvis: "Visibilitas Kolom",
                        colvisRestore: "Kembalikan visibilitas",
                        copy: "Salin",
                        copyKeys: "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br><br>To membatalkan, klik pesan ini atau tekan esc.",
                        copySuccess: {
                            1: "1 baris disalin ke papan klip",
                            _: "%d baris disalin ke papan klip",
                        },
                        copyTitle: "Salin ke Papan klip",
                        csv: "CSV",
                        excel: "Excel",
                        pageLength: {
                            1: "Tampilkan 1 baris",
                            "-1": "Tampilkan semua baris",
                            _: "Tampilkan %d baris",
                        },
                        pdf: "PDF",
                        print: "Cetak",
                    },
                },
            });
        }
    </script>
@endrole

@role('user')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#pengiriman-table');
            var title = "Manajemen Pengiriman";
            var columns = [];
            var dataColumns = [
                /* {
                        data: 'id',
                        name: 'id',
                        searchable: false
                    }, */
                {
                    data: 'nomor_resi',
                    name: 'nomor_resi'
                },
                {
                    data: 'subjek',
                    name: 'subjek'
                },
                {
                    data: 'berat',
                    name: 'berat'
                },
                {
                    data: 'waktu_dibuat',
                    name: 'waktu_dibuat'
                },
                {
                    data: 'last_active',
                    name: 'last_active', // NAME ini digunakan untuk mendefinisikan nama column yang digunakan untuk sorting terutama jika Column dibuat dengan Raw Column
                    orderable: false
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ];
            makeDataTable(table, title, columns, dataColumns);
        });


        function makeDataTable(table, title, columnArray, dataColumns) {

            $(table).DataTable({
                processing: true,
                serverSide: true,
                pageLength: 15,
                buttons: [],
                ajax: @json(route('pengiriman.user.ajax')),
                columns: dataColumns,
                order: [
                    [0, "asc"]
                ],
                language: {
                    emptyTable: "Tidak ada data yang tersedia pada tabel ini",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
                    infoFiltered: "(disaring dari _MAX_ entri keseluruhan)",
                    infoThousands: "'",
                    lengthMenu: "Tampilkan _MENU_ entri",
                    loadingRecords: "Sedang memuat...",
                    processing: "Sedang memproses...",
                    search: "Cari:",
                    zeroRecords: "Tidak ditemukan data yang sesuai",
                    thousands: "'",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya",
                    },
                    aria: {
                        sortAscending: ": aktifkan untuk mengurutkan kolom ke atas",
                        sortDescending: ": aktifkan untuk mengurutkan kolom menurun",
                    },
                    autoFill: {
                        cancel: "Batalkan",
                        fill: "Isi semua sel dengan <i>%d</i>",
                        fillHorizontal: "Isi sel secara horizontal",
                        fillVertical: "Isi sel secara vertikal",
                    },
                    buttons: {
                        collection: "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'/>",
                        colvis: "Visibilitas Kolom",
                        colvisRestore: "Kembalikan visibilitas",
                        copy: "Salin",
                        copyKeys: "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br><br>To membatalkan, klik pesan ini atau tekan esc.",
                        copySuccess: {
                            1: "1 baris disalin ke papan klip",
                            _: "%d baris disalin ke papan klip",
                        },
                        copyTitle: "Salin ke Papan klip",
                        csv: "CSV",
                        excel: "Excel",
                        pageLength: {
                            1: "Tampilkan 1 baris",
                            "-1": "Tampilkan semua baris",
                            _: "Tampilkan %d baris",
                        },
                        pdf: "PDF",
                        print: "Cetak",
                    },
                },
            });
        }
    </script>
@endrole

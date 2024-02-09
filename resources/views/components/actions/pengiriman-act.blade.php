<div class="flex flex-col md:flex-row justify-center items-center gap-2">
    @can('read-pengiriman')
        <div class="group hover:scale-110 rounded py-1 px-2 bg-blue-600">
            <a href="{{ route('detail.pengiriman', ['pengirimanId' => $row->id]) }}"
                class="inline-flex items-center action-icon">
                <i class="fa-solid fa-user-pen text-sm text-gray-100 group-hover:scale-110 mr-1"></i>
                <p class="text-gray-100 text-sm font-semibold">Lihat</p>
            </a>
        </div>
    @endcan
    @can('kirim-pengiriman')
        <div wire:click="$dispatch('kirim-pengiriman-show', {pengirimanId : '{{ $row->id }}'})"
            class="group hover:scale-110 rounded py-1 px-2 bg-green-600">
            <a class="inline-flex items-center action-icon">
                <i class="fa-solid fa-trash-can text-sm text-gray-100 group-hover:scale-110 mr-1"></i>
                <p class="text-gray-100 text-sm font-semibold">Kirim</p>
            </a>
        </div>
    @endcan
    @can('edit-pengiriman')
        <div class="group hover:scale-110 rounded py-1 px-2 bg-yellow-600">
            <a href="{{ route('edit.pengiriman', ['pengirimanId' => $row->id]) }}"
                class="inline-flex items-center action-icon">
                <i class="fa-solid fa-user-pen text-sm text-gray-100 group-hover:scale-110 mr-1"></i>
                <p class="text-gray-100 text-sm font-semibold">Edit</p>
            </a>
        </div>
    @endcan
    @can('delete-pengiriman')
        <div wire:click="$dispatch('delete-pengiriman-show', {pengirimanId : '{{ $row->id }}'})"
            class="group hover:scale-110 rounded py-1 px-2 bg-red-600">
            <a class="inline-flex items-center action-icon">
                <i class="fa-solid fa-trash-can text-sm text-gray-100 group-hover:scale-110 mr-1"></i>
                <p class="text-gray-100 text-sm font-semibold">Hapus</p>
            </a>
        </div>
    @endcan
</div>

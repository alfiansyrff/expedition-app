<?php

namespace App\Livewire;

use App\Models\Pengiriman;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class Beranda extends Component
{
    public $pengirimanId;
    public $resi;

    public function render()
    {
        return view('livewire.beranda');
    }

    #[On('delete-pengiriman-show')]
    public function deletePengirimanShow($pengirimanId)
    {
        $this->pengirimanId = $pengirimanId;
        $pengiriman = Pengiriman::find($pengirimanId);
        $this->resi = $pengiriman->nomor_resi;
        $this->dispatch('open-modal-delete');
    }

    #[On('kirim-pengiriman-show')]
    public function kirimPengirimanShow($pengirimanId)
    {
        $this->pengirimanId = $pengirimanId;
        $pengiriman = Pengiriman::find($pengirimanId);
        $this->resi = $pengiriman->nomor_resi;
        $this->dispatch('open-modal-kirim');
    }

    public function deletePengiriman()
    {
        $pengiriman = Pengiriman::find($this->pengirimanId);
        $pengiriman->delete();
        $this->dispatch('close-modal-delete');

        $alert = [
            'title' => 'BERHASIL!',
            'text' => 'Data Pengiriman dengan Resi "' . $pengiriman->nomor_resi . '"  Berhasil Dihapus!',
            'icon' => 'success',
            'confirmButtonText' => 'OK',
        ];
        $this->dispatch('alert', $alert);
    }

    public function kirimPengiriman()
    {
        $pengiriman = Pengiriman::find($this->pengirimanId);
        $pengiriman->status = 'sudah dikirim';
        $this->dispatch('close-modal-kirim');

        $alert = [
            'title' => 'BERHASIL!',
            'text' => 'Data Pengiriman dengan Resi "' . $pengiriman->nomor_resi . '"  Berhasil Dikirimkan!',
            'icon' => 'success',
            'confirmButtonText' => 'OK',
        ];
        $this->dispatch('alert', $alert);
    }
}

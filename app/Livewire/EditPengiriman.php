<?php

namespace App\Livewire;

use App\Models\Pengiriman;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.app')]
class EditPengiriman extends Component
{
    public $pengirimanId;
    public $no_resi;

    #[Rule('required|string|max:100')]
    public string $subjek;

    #[Rule('required|string|max:100')]
    public string $nama_pengirim;

    #[Rule('required')]
    public string $alamat_pengirim;

    #[Rule('required|string|max:100')]
    public string $nama_penerima;

    #[Rule('required')]
    public string $alamat_penerima;

    #[Rule('required|numeric|min:0|max:100')]
    public int $berat;

    public function mount($pengirimanId)
    {
        $pengiriman = Pengiriman::find($pengirimanId);
        if (!$pengiriman) {
            abort(404);
        }
        $this->pengirimanId = $pengirimanId;
        $this->no_resi = $pengiriman->nomor_resi;
        $this->subjek = $pengiriman->subjek;
        $this->nama_pengirim = $pengiriman->nama_pengirim;
        $this->alamat_pengirim = $pengiriman->alamat_pengirim;
        $this->nama_penerima = $pengiriman->nama_penerima;
        $this->alamat_penerima = $pengiriman->alamat_penerima;
        $this->berat = $pengiriman->berat;
    }

    #[On('edit-pengiriman-show')]
    public function editPengirimanShow()
    {
        $this->dispatch('open-modal-edit');
    }

    public function editPengiriman()
    {
        $this->validate();
        $this->dispatch('close-modal-edit');

        $pengiriman = Pengiriman::find($this->pengirimanId);
        $pengiriman->subjek = $this->subjek;
        $pengiriman->nama_pengirim = $this->nama_pengirim;
        $pengiriman->alamat_pengirim = $this->alamat_pengirim;
        $pengiriman->nama_penerima = $this->nama_penerima;
        $pengiriman->alamat_penerima = $this->alamat_penerima;
        $pengiriman->berat = $this->berat;
        $pengiriman->status = 'sedang dikirim';
        $pengiriman->save();

        $alert = [
            'title' => 'BERHASIL!',
            'text' => 'Data Pengiriman Resi "' . $pengiriman->nomor_resi . '" Berhasil Diperbarui!',
            'icon' => 'success',
            'confirmButtonText' => 'OK',
        ];
        $this->dispatch('alert', $alert);
    }

    public function render()
    {
        return view('livewire.edit-pengiriman');
    }
}

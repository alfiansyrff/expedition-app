<?php

namespace App\Livewire;

use App\Models\Pengiriman;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.app')]
class CreatePengiriman extends Component
{
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

    public function generateNomorResi()
    {
        $letters = '';
        for ($i = 0; $i < 3; $i++) {
            $letters .= chr(rand(65, 90));
        }

        $numbers = '';
        for ($j = 0; $j < 4; $j++) {
            $numbers .= rand(0, 9);
        }

        return $letters . $numbers;
    }

    #[On('create-pengiriman-show')]
    public function kirimPengirimanShow()
    {
        $this->dispatch('open-modal-new');
    }

    public function tambahPengiriman()
    {
        $this->validate();
        $this->dispatch('close-modal-kirim');

        Pengiriman::create([
            'subjek' => $this->subjek,
            'nomor_resi' => $this->generateNomorResi(),
            'nama_pengirim' => $this->nama_pengirim,
            'alamat_pengirim' => $this->alamat_pengirim,
            'nama_penerima' => $this->nama_penerima,
            'alamat_penerima' => $this->alamat_penerima,
            'berat' => $this->berat,
            'status' => 'sedang dikirim',
            'pengirim_id' => auth()->id(),
        ]);

        $alert = [
            'title' => 'BERHASIL!',
            'text' => 'Data Pengiriman Berhasil Ditambahkan',
            'icon' => 'success',
            'confirmButtonText' => 'OK',
        ];
        $this->dispatch('alert', $alert);
    }

    public function render()
    {
        return view('livewire.create-pengiriman');
    }
}

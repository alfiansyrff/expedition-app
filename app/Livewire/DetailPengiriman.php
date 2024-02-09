<?php

namespace App\Livewire;

use App\Models\Pengiriman;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class DetailPengiriman extends Component
{
    public $pengirimanId;
    public $pengiriman;
    public $resi;

    public function mount($pengirimanId)
    {
        $this->pengirimanId = $pengirimanId;
        $this->pengiriman = Pengiriman::find($pengirimanId);
        if (!$this->pengiriman) {
            abort(404);
        }
        $this->resi = $this->pengiriman->nomor_resi;
    }

    public function render()
    {
        return view('livewire.detail-pengiriman');
    }
}

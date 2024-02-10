<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengiriman = new \App\Models\Pengiriman();
        $pengiriman->subjek = "Pengiriman Barang";
        $pengiriman->nomor_resi = "JGF2812";
        $pengiriman->nama_pengirim = "Gavin Atha";
        $pengiriman->alamat_pengirim = "Jl. Raya Kedungwaringin No. 123";
        $pengiriman->nama_penerima = "Alfian Syarif";
        $pengiriman->alamat_penerima = "Jl. Raya Kedungwaringin No. 234";
        $pengiriman->berat = 5;
        $pengiriman->status = "dikirim";
        $pengiriman->pengirim_id = 1;
        $pengiriman->save();

        $pengiriman = new \App\Models\Pengiriman();
        $pengiriman->subjek = "Pengiriman Surat";
        $pengiriman->nomor_resi = "KLO9815";
        $pengiriman->nama_pengirim = "Alfian Syarif";
        $pengiriman->alamat_pengirim = "Jl. Raya Kedungwaringin No. 123";
        $pengiriman->nama_penerima = "Gavin Atha";
        $pengiriman->alamat_penerima = "Jl. Raya Kedungwaringin No. 234";
        $pengiriman->berat = 1;
        $pengiriman->status = "dikirim";
        $pengiriman->pengirim_id = 2;
        $pengiriman->save();
    }
}

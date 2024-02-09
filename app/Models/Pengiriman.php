<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = "pengirimans";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'subjek',
        'nomor_resi',
        'nama_pengirim',
        'alamat_pengirim',
        'nama_penerima',
        'alamat_penerima',
        'berat',
        'status',
        'pengirim_id'
    ];

    public function pengirim()
    {
        return $this->belongsTo(User::class, 'pengirim_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = "pengirimans";
    protected $primaryKey = "id";
    protected $keyType = "string";
    public $incrementing = false;
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

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function pengirim()
    {
        return $this->belongsTo(User::class, 'pengirim_id', 'id');
    }
}

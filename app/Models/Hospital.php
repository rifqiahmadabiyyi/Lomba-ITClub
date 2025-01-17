<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'lokasi', 'image_path', 'deskripsi', 'keahlian_penyakit', 'obat_penyakit', 'rincian_penanganan', 'fasilitas', 'dukungan', 'review_id',
    ];
    public function galery()
    {
        return $this->hasMany(Galery::class, 'hospital_id', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\Ruangan;
use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }
}

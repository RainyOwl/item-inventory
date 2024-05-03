<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";

    protected $primaryKey = "kode";
    protected $keyType = "string";

    protected $fillable = [
        "kode",
        "nama",
        "jenis",
        "jumlah",
        "harga"
    ];

    public function daftarPembelian(): HasMany
    {
        return $this->hasMany("pembelian", "kode_barang", "kode");
    }
}

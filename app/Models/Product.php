<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use HasUlids;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'toko_id',
        'nama_product',
        'harga',
        'discount_id',
        'merk_id',
        'etalase_id',
        'jmlh_pembelian',
    ];

    public function DetailProduct() {
        return $this->hasOne(DetailProduct::class, 'product_id');
    }

    public function GambarProduct() {
        return $this->hasMany(GambarProduct::class, 'product_id', 'id');
    }

    public function RateProduct() {
        return $this->hasMany(RateProduct::class, 'product_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GambarProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'product_id',
        'gambar_product',
    ];
}

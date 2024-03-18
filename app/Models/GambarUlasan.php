<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GambarUlasan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'gambar_rates';

    protected $fillable = [
        'id',
        'rate_id',
        'gambar_rate',
    ];
}

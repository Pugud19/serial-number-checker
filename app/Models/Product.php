<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = 'id';

    protected $fillable = [
        'product_name',
        'serial_number',
        'foto_url',
        'tahun_dibuat',
    ];
}

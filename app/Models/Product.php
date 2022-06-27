<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tbl_product';
    protected $fillable = [
        'name',
        'description',
        'basePrice',
        'sellingPrice',
        'images'
    ];
}

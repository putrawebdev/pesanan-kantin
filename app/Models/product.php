<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $fillable = ['nama_user', 'nama_product', 'harga_product'];
}

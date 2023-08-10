<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'proveedor_id', 'name', 'price'];
    public function category(){
        return  $this->belongsTo(Category::class);

    }
    public function proveedor(){
        return  $this->belongsTo(Proveedor::class);
    }
}

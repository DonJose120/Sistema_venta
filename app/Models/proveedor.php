<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name', 'lastname', 'address', 'phone', 'correo'];
    public function city () {
        return $this->belongsTo(City::class);
    }
}

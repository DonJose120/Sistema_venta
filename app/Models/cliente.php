<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'address', 'phone', 'correo'];

    public function cliente (){
        return $this->hasMany(CLiente::class);
    }
}

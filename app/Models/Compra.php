<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    public function autos(){
        return $this->hasMany(Auto::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function mensajes(){
        return $this->hasMany(Mensaje::class);
    }
}

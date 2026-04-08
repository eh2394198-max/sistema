<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Esto permite que el controlador use $request->all()
    protected $fillable = ['nombre', 'email'];
}

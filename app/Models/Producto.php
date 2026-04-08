<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Campos que permitimos guardar en la base de datos
    protected $fillable = ['nombre', 'marca', 'precio', 'stock', 'descripcion'];
}
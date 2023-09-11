<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ID viene automaticamente
// tabla: igual que la clase pero en plural

class Producto extends Model
{
    //use HasFactory;

    //protected $table="productos";
    // por defecto la llave primaria se llama ID, es entero y es autonumerico (y no llenable)
    // protected $primaryKey="nombre";

    protected $fillable=["nombre","precio","cantidad"];
    //protected $hidden=['_token'];


}

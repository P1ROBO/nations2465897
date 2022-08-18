<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    protected $table = "regions";
    protected $primaryKey = 'region_id';

    use HasFactory;

    public function continente(){
        /* belogsTo: Parametros
            1 modelo a relacionar
            2 laFK del modelo a relacionar, en el modelo 
        */
        return $this -> belongsTo(Continent::class , 'continent_id');
    }
    public function paises(){
        return $this-> hasMany(Country :: class , 'region_id');
    }
}

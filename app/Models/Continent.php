<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = "continents";
    protected $primaryKey = "continent_id";
    
    use HasFactory;

    //relacion 1:M con regiones
    public function regiones(){
        return $this ->hasmany(Region:: class,
                        'continent_id' );
    }
}

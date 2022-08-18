<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = 'country_id';

    use HasFactory;
    //parametro
    //modelo a relacionar
    //tabla pivote
    //FK en la  tabla pivote de la 3ra tabla
    //FK de la 1ra tabla
    public function idiomas()
    {
        return $this->belongsToMany(
            Languaje::class,
            'country_languages',
            'country_id',
            'language_id'
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languaje extends Model
{
    protected $table = "languages";
    protected $primaryKey = 'language_id';

    use HasFactory;
}

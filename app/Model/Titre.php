<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    protected $table = 'titre';

    protected $fillable = ['name', 'points_to_get'];

}

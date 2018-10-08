<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserTitre extends Model
{
    protected $table = 'user_title';

    protected $fillable = ['user_id', 'titre_id'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function titre()
    {
        return $this->hasOne('App\Model\Titre', 'id', 'titre_id');
    }

    public function haveAlreadyTitle($user_id, $titre_id)
    {
        return $this->where('user_id', '=', $user_id)->where('titre_id', '=', $titre_id)->count();
    }
}

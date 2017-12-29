<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'story';

    protected $fillable = ['name', 'location'];

    public function storyable()
    {
        return $this->morphTo();
    }
}

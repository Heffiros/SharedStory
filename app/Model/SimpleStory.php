<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SimpleStory extends Model
{
    protected $table = 'simple_story';
    public $timestamps = false;

    protected $fillable = ['name', 'location'];

    public function story()
    {
        return $this->morphMany('App\Model\Story', 'storyable');
    }
}

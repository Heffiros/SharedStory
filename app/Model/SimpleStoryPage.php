<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SimpleStoryPage extends Model
{
    protected $table = 'simple_story_page';
    public $timestamps = false;

    protected $fillable = ['content'];
}

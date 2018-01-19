<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class SimpleStory extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $table = 'simple_story';
    public $timestamps = false;

    protected $fillable = ['name', 'location'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('photo', [
            'styles' => [
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);

        parent::__construct($attributes);
    }
    public function story()
    {
        return $this->morphMany('App\Model\Story', 'storyable');
    }

    public function pages()
    {
        return $this->hasMany('App\Model\SimpleStoryPage');
    }
}

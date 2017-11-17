<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SimpleStoryPage extends Model
{
    protected $table = 'simple_story_page';
    public $timestamps = false;

    protected $fillable = ['content', 'ordre'];

    public function isLastPage()
    {
        $page = SimpleStoryPage::where(array('simple_story_id' => $this->simple_story_id, 'ordre' => $this->ordre + 1))->first();
        if ($page)
            return false;
        else
            return true;
    }
}

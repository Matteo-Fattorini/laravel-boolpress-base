<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table = "tags";

    public function getPosts()
    {
        return $this->belongsToMany("App\PostModel","post_tag","tag_id","post_id");
    }
}



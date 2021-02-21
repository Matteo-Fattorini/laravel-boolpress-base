<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = "posts";

    protected $fillable = ["title","author", "category_id"];

    public function getInformation(){
        return $this->hasOne("App\PostInformationModel","post_id", "id");
    }

    public function getCategory(){
        return $this->belongsTo("App\CategoryModel","category_id");
    }

    public function getTags(){
        return $this->belongsToMany("App\TagModel", "post_tag", "post_id", "tag_id");
    }
    






    
}



<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{


    protected $fillable = ['title', 'content'];

    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id')->withTimestamps();
    }

}

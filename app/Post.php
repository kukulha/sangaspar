<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Post extends Model
{

    use Taggable;
    
    protected $fillable = [
    	'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'file'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
